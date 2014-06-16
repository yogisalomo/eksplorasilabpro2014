from django.contrib import admin
from pinjemdong.models import Account, Book, Book_list, Friend_list, Password, Synopsis, Rating, Request

# Register your models here.
class AccountLayout(admin.ModelAdmin):
    list_display = ['username', 'name', 'address', 'fav_book', 'fav_genre']
    
class BookLayout(admin.ModelAdmin):
    list_display = ['title', 'writer', 'year', 'publisher', 'place', 'counter']

class BookListLayout(admin.ModelAdmin):
    list_display = ['username', 'book', 'available']

class FriendListLayout(admin.ModelAdmin):
    list_display = ['username', 'user_friend']
    
class PasswordLayout(admin.ModelAdmin):
    list_display = ['username', 'password']

class SynopsisLayout(admin.ModelAdmin):
    list_display = ['writer', 'book', 'text']
    
class RatingLayout(admin.ModelAdmin):
    list_display = ['giver', 'book', 'rate']
    
class RequestLayout(admin.ModelAdmin):
    list_display = ['book', 'owner', 'requester']

    
admin.site.register(Account, AccountLayout)
admin.site.register(Book, BookLayout)
admin.site.register(Book_list, BookListLayout)
admin.site.register(Friend_list, FriendListLayout)
admin.site.register(Password, PasswordLayout)
admin.site.register(Synopsis, SynopsisLayout)
admin.site.register(Rating, RatingLayout)
admin.site.register(Request, RequestLayout)