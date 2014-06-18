# encoding: utf8
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('pinjemdong', '0005_auto_20140616_2008'),
    ]

    operations = [
        migrations.CreateModel(
            name='Request',
            fields=[
                ('id', models.AutoField(serialize=False, primary_key=True, verbose_name='ID', auto_created=True)),
                ('book', models.ForeignKey(to='pinjemdong.Book', to_field='id')),
                ('owner', models.ForeignKey(to='pinjemdong.Account', to_field='id')),
                ('requester', models.ForeignKey(to='pinjemdong.Account', to_field='id')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
