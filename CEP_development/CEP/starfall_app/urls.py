from django.urls import path
from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('motion-songs/', views.motion_songs, name='motion_songs'),
    path('play/<int:song_id>/', views.play_song, name='play_song'),
    path('sing-along/', views.sing_along, name='sing_along'),
    path('h/me/me-xter/me-threequarter-front-optimize/', views.get_avatar, name='get_avatar'),
    path('colors/', views.colors, name='colors'),  # This line must be present
]