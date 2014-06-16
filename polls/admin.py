from django.contrib import admin
from polls.models import Question, Choice

# Register your models here.
class InlineChoice(admin.TabularInline):
    model = Choice
    extra = 3

class QuestionLayout(admin.ModelAdmin):
    fieldsets = [
        (None, {'fields' : ['question_text']}),
        ('Date Information', {'fields' : ['pub_date']}),
    ]
    inlines = [InlineChoice]
    list_display = ['question_text', 'pub_date', 'was_published_recently']
    list_filter = ['pub_date']
    search_fields = ['question_text']
    
admin.site.register(Question, QuestionLayout)