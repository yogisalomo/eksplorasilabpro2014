# encoding: utf8
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('pinjemdong', '0002_book_list_friend_list_password'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='book',
            name='owner',
        ),
    ]
