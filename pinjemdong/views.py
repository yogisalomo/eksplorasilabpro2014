from django.shortcuts import render, get_object_or_404
from pinjemdong.models import Account, Book, Book_list, Friend_list, Password, Synopsis, Rating, Request, Review
from django.http.response import HttpResponse

# Create your views here.

def login(request):
    return render(request, 'pinjemdong/login.html')

def home(request, username):
    return render(request, 'pinjemdong/index.html', { 'username' : username})

def index(request, message):
    return render(request, 'pinjemdong/index.html', { 'message' : message })

def profile(request, username, peoplename):
    data = Account.objects.filter(username__exact=peoplename)
    people = data[0]
    books = Book_list.objects.filter(username__username__exact=username)
    return render(request, 'pinjemdong/profile.html', { 'username' : username, 'people' : people, 'books' : books })

def add(request, username, peoplename):
    data = Friend_list.objects.filter(username__username__exact=username, user_friend__username__exact=peoplename)
    if data:
        message = 'Error: already in friend list'
        return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })
    elif username == peoplename:
        message = 'Error cannot add yourself as friend'
        return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })
    else:
        uservar = Account.objects.filter(username__exact=username)[0]
        peoplevar = Account.objects.filter(username__exact=peoplename)[0]
        newdata = Friend_list(username=uservar, user_friend=peoplevar)
        newdata2 = Friend_list(username=peoplevar, user_friend=uservar)
        newdata.save()
        newdata2.save()
        message = peoplename.__str__() + ' Has been added to friend list'
        return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })

def myprofile(request, username):
    user = Account.objects.filter(username__exact=username)
    books = Book_list.objects.filter(username__username__exact=username)
    requesters = Request.objects.filter(owner__username__exact=username)
    return render(request, 'pinjemdong/myprofile.html', { 'user' : user[0], 'books' : books, 'requesters' : requesters })

def editpage(request, username):
    user = Account.objects.filter(username__exact=username)
    return render(request, 'pinjemdong/editprofile.html', { 'user' : user[0] })

def editprofile(request, username):
    if request.method == 'POST':
        data = Account.objects.filter(username__exact=username)
        if data:
            user = data[0]
            user.name = request.POST['name']
            user.address = request.POST['address']
            user.fav_book = request.POST['fav_book']
            user.fav_genre = request.POST['fav_genre']
            user.save()
            return render(request, 'pinjemdong/profile.html', { 'user' : user })

def search(request, username):
    if request.method == 'POST':
        query = request.POST['query']
        result = Account.objects.filter(username__contains=query)
        return render(request, 'pinjemdong/searchresult.html', { 'username' : username, 'result' : result })

def searchbook(request, username):
    if request.method == 'POST':
        query = request.POST['query']
        result = Book.objects.filter(title__contains=query)
        return render(request, 'pinjemdong/searchbookresult.html', { 'username' : username, 'result' : result })
    
def book(request, username, booktitle):
    data = Book.objects.filter(title__exact=booktitle)
    book = data[0]
    return render(request, 'pinjemdong/book.html', { 'username' : username, 'book' : book })

def addbook(request, username, booktitle):
    data = Book_list.objects.filter(username__username__exact=username, book__title__exact=booktitle)
    if data:
        message = 'Error: already in book list'
        return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })
    else:
        uservar = Account.objects.filter(username__exact=username)[0]
        bookvar = Book.objects.filter(title__exact=booktitle)[0]
        entry = Book_list(username=uservar, book=bookvar)
        entry.save()
        message = booktitle + ' Has been added to book list'
        return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message } )
    
def editbook(request, username, booktitle):
    data = Book.objects.filter(title__exact=booktitle)
    if data:
        book = data[0]
    else:
        book = None
    return render(request, 'pinjemdong/editbook.html', { 'username' : username, 'book' : book })

def changebook(request, username, booktitle):
    if request.method == 'POST':
        data = Book.objects.filter(title__exact=booktitle)
        if data:
            book = data[0]
            book.title = request.POST['title']
            book.writer = request.POST['writer']
            book.publisher = request.POST['publisher']
            book.place = request.POST['place']
            book.year = request.POST['year']
            book.save()
            return render(request, 'pinjemdong/book.html', { 'username' : username, 'book' : book })
        else:
            title = request.POST['title']
            writer = request.POST['writer']
            publisher = request.POST['publisher']
            place = request.POST['place']
            year = request.POST['year']
            book = Book(title=title, writer=writer, year=year, publisher=publisher, place=place)
            book.save()
            return render(request, 'pinjemdong/book.html', { 'username' : username, 'book' : book })

def request(request, username, owner, booktitle):
    data = Request.objects.filter(book__title__exact=booktitle, owner__username__exact=owner, requester__username__exact=username)
    if data:
        message = 'Error: this request already submitted'
        return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })
    else:
        bookvar = Book.objects.filter(title__exact=booktitle)[0]
        ownervar = Account.objects.filter(username__exact=owner)[0]
        requestervar = Account.objects.filter(username__exact=username)[0]
        entry = Request(book=bookvar, owner=ownervar, requester=requestervar)
        entry.save()
        message = 'Request has been sent'
        return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })
    
def acceptrequest(request, username, booktitle):
    if request.method == 'POST':
        requester = request.POST['choice']
        data = Request.objects.filter(book__title__exact=booktitle, owner__username__exact=username, requester__username__exact=requester)
        data.delete()
        book = Book_list.objects.filter(username__username__exact=username, book__title__exact=booktitle)
        if book:
            book[0].available = False
            book[0].save()
            message = 'Request accepted'
            return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })
        else:
            message = 'Request error'
            return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })
    
def review(request, username, booktitle):
    return render(request, 'pinjemdong/review.html', { 'username' : username, 'booktitle' : booktitle })

def savereview(request, username, booktitle):
    if request.method == 'POST':
        bookvar = Book.objects.filter(title__exact=booktitle)[0]
        writervar = Account.objects.filter(username__exact=username)[0]
        review = request.POST['textreview'] 
        entry = Review(book=bookvar, writer=writervar, review=review)
        entry.save()
        message = 'Review succesfully added'
        return render(request, 'pinjemdong/index.html', { 'username' : username, 'message' : message })

def signup(request):
    return render(request, 'pinjemdong/signup.html')

def newAccount(request):
    if request.method == 'POST':
        nuser = request.POST['name']
        naddress = request.POST['address']
        nusername = request.POST['username']
        npassword = request.POST['password']
        if nuser and naddress and nusername and npassword:
            data = Password.objects.filter(username__username__exact=nusername)
            if data.count() > 0 and data[0].username.__str__() == nusername:
                message = 'Account already exist'
                return render(request, 'pinjemdong/signup.html', { 'message' : message })
            else:
                message = 'Account successfully created'
                entry = Account(username=nusername, name=nuser, address=naddress, fav_book='-', fav_genre='-')
                entry.save()
                entry2 = Password(username=entry, password=npassword)
                entry2.save()
                return render(request, 'pinjemdong/login.html', { 'message' : message })
                
    
def validate(request):
    if request.method == 'POST':
        user = request.POST['username']
        password = request.POST['password']
        data = Password.objects.filter(username__username__exact=user)
        if data is None:
            return HttpResponse("owuow")
        elif data[0].password == password:
            message = ""
            return render(request, 'pinjemdong/index.html', { 'username' : user, 'message' : message })
        else:
            message = 'Wrong username / password'
            return render(request, 'pinjemdong/login.html', { 'message' : message })
        
def validate2(request, username):
    if not username:
        message = 'You are not logged in'
        return render(request, 'pinjemdong/login.html', { 'message' : message } )