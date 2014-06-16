# encoding: utf8
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('pinjemdong', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Book_list',
            fields=[
                ('id', models.AutoField(serialize=False, auto_created=True, verbose_name='ID', primary_key=True)),
                ('username', models.ForeignKey(to_field='id', to='pinjemdong.Account')),
                ('book', models.ForeignKey(to_field='id', to='pinjemdong.Book')),
                ('status', models.BooleanField(default=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Friend_list',
            fields=[
                ('id', models.AutoField(serialize=False, auto_created=True, verbose_name='ID', primary_key=True)),
                ('username', models.ForeignKey(to_field='id', to='pinjemdong.Account')),
                ('user_friend', models.ForeignKey(to_field='id', to='pinjemdong.Account')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Password',
            fields=[
                ('id', models.AutoField(serialize=False, auto_created=True, verbose_name='ID', primary_key=True)),
                ('username', models.ForeignKey(to_field='id', to='pinjemdong.Account')),
                ('password', models.CharField(max_length=20)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
