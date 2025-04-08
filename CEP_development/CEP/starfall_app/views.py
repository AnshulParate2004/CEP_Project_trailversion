from django.shortcuts import render
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from .models import Song

def index(request):
    return render(request, 'index.html')

def motion_songs(request):
    songs = Song.objects.all()
    return render(request, 'motion.html', {'songs': songs})

@csrf_exempt  # Remove this in production, handle CSRF properly
def play_song(request, song_id):
    if request.method == 'POST':
        try:
            song = Song.objects.get(id=song_id)
            return JsonResponse({
                'status': 'success',
                'videoUrl': song.video.url if song.video else '',  # Use .url for FileField
                'title': song.title
            })
        except Song.DoesNotExist:
            return JsonResponse({'status': 'error', 'message': 'Song not found'}, status=404)
    return JsonResponse({'status': 'error', 'message': 'Invalid request'}, status=400)

def get_avatar(request):
    h5 = request.GET.get('h5', '0251213045000')
    dummy_image = b'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8DwHwAFBQIAQnBUjgAAAABJRU5ErkJggg=='
    return JsonResponse(dummy_image.decode('utf-8'), safe=False)


def sing_along(request):
    return render(request, 'sing-along.html')

def colors(request):
    return render(request, 'colors.html')

