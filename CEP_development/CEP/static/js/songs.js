// Function to play video in fullscreen
function playVideo(songId, videoUrl, title) {
    const videoModal = document.getElementById('videoModal');
    const videoPlayer = document.getElementById('videoPlayer');
    const videoTitle = document.getElementById('videoTitle');
    
    // Set video source and title
    videoPlayer.src = videoUrl;
    videoTitle.textContent = title;
    
    // Show modal
    videoModal.style.display = 'block';
    
    // Play video
    videoPlayer.load();
    videoPlayer.play()
        .then(() => {
            if (videoPlayer.requestFullscreen) {
                videoPlayer.requestFullscreen();
            } else if (videoPlayer.webkitRequestFullscreen) {
                videoPlayer.webkitRequestFullscreen();
            } else if (videoPlayer.msRequestFullscreen) {
                videoPlayer.msRequestFullscreen();
            }
        })
        .catch(err => {
            console.log("Error attempting to play video: ", err);
        });
}

// Function to handle back button click
function setupBackButton() {
    const backButton = document.getElementById('backButton');
    backButton.addEventListener('click', () => {
        window.location.href = "/"; // Navigate back to index
    });
}

// Function to handle modal close button and song card clicks
// [Existing code remains unchanged]

function setupInteractions() {
    const closeButton = document.querySelector('.close-button');
    const videoModal = document.getElementById('videoModal');
    const videoPlayer = document.getElementById('videoPlayer');
    const songCards = document.querySelectorAll('.song-card');
    const singAlongBtn = document.querySelector('.sing-along-btn');

    // Setup song card clicks
    songCards.forEach(card => {
        card.addEventListener('click', () => {
            const songId = card.getAttribute('data-song-id');
            const videoUrl = card.getAttribute('data-video-url');
            const title = card.querySelector('.song-title').textContent;
            
            console.log(`Playing song ${songId}: ${videoUrl}`);
            card.classList.toggle('active');
            if (!card.classList.contains('active')) card.classList.add('inactive');
            else card.classList.remove('inactive');
            
            if (videoUrl) {
                playVideo(songId, videoUrl, title);
            } else {
                console.log(`No video URL found for song ID: ${songId}`);
            }
        });
    });

    // Setup sing-along button click
    if (singAlongBtn) {
        singAlongBtn.addEventListener('click', () => {
            window.location.href = '/sing-along/';
        });
    }

    // [Rest of the existing close modal and fullscreen code]
}

// [Rest of the code remains unchanged]
    // Setup song card clicks
    songCards.forEach(card => {
        card.addEventListener('click', () => {
            const songId = card.getAttribute('data-song-id');
            const videoUrl = card.getAttribute('data-video-url');
            const title = card.querySelector('.song-title').textContent;
            
            console.log(`Playing song ${songId}: ${videoUrl}`); // Debug log
            // Toggle active state
            card.classList.toggle('active');
            if (!card.classList.contains('active')) card.classList.add('inactive');
            else card.classList.remove('inactive');
            
            // Play video if URL exists
            if (videoUrl) {
                playVideo(songId, videoUrl, title);
            } else {
                console.log(`No video URL found for song ID: ${songId}`);
            }
        });
    });

    // Close modal
    closeButton.addEventListener('click', () => {
        videoModal.style.display = 'none';
        videoPlayer.pause();
        exitFullscreen();
    });

    // Close modal when clicking outside
    window.addEventListener('click', (event) => {
        if (event.target === videoModal) {
            videoModal.style.display = 'none';
            videoPlayer.pause();
            exitFullscreen();
        }
    });

    // Handle fullscreen exit
    document.addEventListener('fullscreenchange', exitHandler);
    document.addEventListener('webkitfullscreenchange', exitHandler);
    document.addEventListener('mozfullscreenchange', exitHandler);
    document.addEventListener('MSFullscreenChange', exitHandler);

    function exitHandler() {
        if (!document.fullscreenElement && !document.webkitIsFullScreen && !document.mozFullScreen && !document.msFullscreenElement) {
            videoModal.style.display = 'none';
            videoPlayer.pause();
        }
    }

    function exitFullscreen() {
        if (document.fullscreenElement) {
            if (document.exitFullscreen) document.exitFullscreen();
            else if (document.webkitExitFullscreen) document.webkitExitFullscreen();
            else if (document.msExitFullscreen) document.msExitFullscreen();
        }
    }


// Initialize the app
document.addEventListener('DOMContentLoaded', () => {
    setupBackButton();
    setupInteractions();
});