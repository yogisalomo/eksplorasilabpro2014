# encoding: utf8
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Account',
            fields=[
                ('id', models.AutoField(serialize=False, auto_created=True, verbose_name='ID', primary_key=True)),
                ('username', models.CharField(max_length=50)),
                ('name', models.CharField(max_length=100)),
                ('address', models.CharField(max_length=200)),
                ('fav_book', models.CharField(max_length=200, default='-')),
                ('fav_genre', models.CharField(max_length=50, default='-')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Book',
            fields=[
                ('id', models.AutoField(serialize=False, auto_created=True, verbose_name='ID', primary_key=True)),
                ('title', models.CharField(max_length=100)),
                ('owner', models.ForeignKey(to_field='id', to='pinjemdong.Account')),
                ('writer', models.CharField(max_length=50)),
                ('year', models.IntegerField()),
                ('publisher', models.CharField(max_length=100)),
                ('place', models.CharField(max_length=100)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
