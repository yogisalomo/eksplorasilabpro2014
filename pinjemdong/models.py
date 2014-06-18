from django.db import models

# Create your models here.

class Account(models.Model):
    username = models.CharField(max_length=50)
    name = models.CharField(max_length=100)
    address = models.CharField(max_length=200)
    fav_book = models.CharField(max_length=200, default='-')
    fav_genre = models.CharField(max_length=50, default='-')
    def __str__(self):
        return self.username

class Book(models.Model):
    title = models.CharField(max_length=100)
    writer = models.CharField(max_length=50)
    year = models.IntegerField()
    publisher = models.CharField(max_length=100)
    place = models.CharField(max_length=100)
    counter = models.IntegerField(default=0)
    def __str__(self):
        return self.title
    
class Password(models.Model):
    username = models.ForeignKey(Account)
    password = models.CharField(max_length=20)

class Friend_list(models.Model):
    username = models.ForeignKey(Account, related_name='user_set')
    user_friend = models.ForeignKey(Account, related_name='friend_set')
        
class Book_list(models.Model):
    username = models.ForeignKey(Account)
    book = models.ForeignKey(Book)
    available = models.BooleanField(default=True)
    
class Synopsis(models.Model):
    writer = models.ForeignKey(Account)
    book = models.ForeignKey(Book)
    text = models.CharField(max_length=3000)
    
class Rating(models.Model):
    giver = models.ForeignKey(Account)
    book = models.ForeignKey(Book)
    rate = models.FloatField(default=0)
    
class Request(models.Model):
    book = models.ForeignKey(Book)
    owner = models.ForeignKey(Account, related_name='owner_set')
    requester = models.ForeignKey(Account, related_name='requester_set')

class Review(models.Model):
    book = models.ForeignKey(Book)
    writer = models.ForeignKey(Account)
    review = models.CharField(max_length=3000)
    