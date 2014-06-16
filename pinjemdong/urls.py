from django.conf.urls import patterns, url
from pinjemdong import views

urlpatterns = patterns('',
    url(r'^login/$', views.login, name='login'),
    url(r'^home/(?P<username>.+)$', views.home, name='home'),
    url(r'^index/(?P<message>.+)/$', views.index, name='index'),
    url(r'^validate/$', views.validate, name='validate'),
    url(r'^signup/$', views.signup, name='signup'),
    url(r'^newAccount/$', views.newAccount, name='newAccount'),
    url(r'^validate2/$', views.validate2, name='validate2'),
    url(r'^myprofile/(?P<username>.+)/$', views.myprofile, name='myprofile'),
    url(r'^editprofile/(?P<username>.+)/$', views.editpage, name='editpage'),
    url(r'^(?P<username>.+)/editbook/(?P<booktitle>.+)/$', views.editbook, name='editbook'),
    url(r'^edit/(?P<username>.+)/$', views.editprofile, name='edit'),
    url(r'^(?P<username>.+)/changebook/(?P<booktitle>.+)/$', views.changebook, name='changebook'),
    url(r'^(?P<username>.+)/search/$', views.search, name='search'),
    url(r'^(?P<username>.+)/searchbook/$', views.searchbook, name='searchbook'),
    url(r'^(?P<username>.+)/view/(?P<peoplename>.+)/$', views.profile, name='profile'),
    url(r'^(?P<username>.+)/viewbook/(?P<booktitle>.+)/$', views.book, name='book'),
    url(r'^(?P<username>.+)/add/(?P<peoplename>.+)/$', views.add, name='add'),
    url(r'^(?P<username>.+)/addbook/(?P<booktitle>.+)/$', views.addbook, name='addbook'),
    url(r'^(?P<username>.+)/req/(?P<owner>.+)/(?P<booktitle>.+)$', views.request ,name='sendrequest'),
    url(r'^(?P<username>.+)/acc/(?P<booktitle>.+)/$', views.acceptrequest, name='acceptrequest'),
    url(r'^(?P<username>.+)/wrev/(?P<booktitle>.+)/$', views.review, name='review'),
    url(r'^(?P<username>.+)/saverev/(?P<booktitle>.+)/$', views.savereview, name='savereview'),
)

