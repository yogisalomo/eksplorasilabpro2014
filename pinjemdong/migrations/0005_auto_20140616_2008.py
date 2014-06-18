# encoding: utf8
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('pinjemdong', '0004_auto_20140616_1122'),
    ]

    operations = [
        migrations.CreateModel(
            name='Rating',
            fields=[
                ('id', models.AutoField(verbose_name='ID', auto_created=True, primary_key=True, serialize=False)),
                ('giver', models.ForeignKey(to='pinjemdong.Account', to_field='id')),
                ('book', models.ForeignKey(to='pinjemdong.Book', to_field='id')),
                ('rate', models.FloatField(default=0)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Synopsis',
            fields=[
                ('id', models.AutoField(verbose_name='ID', auto_created=True, primary_key=True, serialize=False)),
                ('writer', models.ForeignKey(to='pinjemdong.Account', to_field='id')),
                ('book', models.ForeignKey(to='pinjemdong.Book', to_field='id')),
                ('text', models.CharField(max_length=3000)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.AddField(
            model_name='book',
            name='counter',
            field=models.IntegerField(default=0),
            preserve_default=True,
        ),
    ]
