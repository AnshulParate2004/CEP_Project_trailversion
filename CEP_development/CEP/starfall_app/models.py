from django.db import models

class Song(models.Model):
    title = models.CharField(max_length=100)
    image = models.ImageField(upload_to='song_images/')
    video = models.FileField(upload_to='song_videos/', null=True, blank=True)  # Allow null and blank
    is_active = models.BooleanField(default=False)

    def __str__(self):
        return self.title