# encoding: utf8
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('pinjemdong', '0003_remove_book_owner'),
    ]

    operations = [
        migrations.RenameField(
            model_name='book_list',
            old_name='status',
            new_name='available',
        ),
    ]
