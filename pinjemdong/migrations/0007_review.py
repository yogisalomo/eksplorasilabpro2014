# encoding: utf8
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('pinjemdong', '0006_request'),
    ]

    operations = [
        migrations.CreateModel(
            name='Review',
            fields=[
                ('id', models.AutoField(primary_key=True, verbose_name='ID', serialize=False, auto_created=True)),
                ('book', models.ForeignKey(to='pinjemdong.Book', to_field='id')),
                ('writer', models.ForeignKey(to='pinjemdong.Account', to_field='id')),
                ('review', models.CharField(max_length=3000)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
