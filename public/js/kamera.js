const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const captureButton = document.getElementById('capture');
    const toggleCameraBtn = document.getElementById('toggle-camera');
    let stream = null;
    let isCameraOn = true;

    // Function to start the camera
    async function startCamera() {
        try {
            stream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = stream;
            video.play();
        } catch (error) {
            console.error("Error accessing camera: ", error);
        }
    }

    // Function to stop the camera
    function stopCamera() {
        if (stream) {
            let tracks = stream.getTracks();
            tracks.forEach(track => track.stop());
            stream = null;
        }
    }

    // Toggle camera state when the button is clicked
    toggleCameraBtn.addEventListener('click', () => {
        if (isCameraOn) {
            stopCamera();
            toggleCameraBtn.textContent = 'Start';
            toggleCameraBtn.classList.replace('bg-red-500', 'bg-green-500');
        } else {
            startCamera();
            toggleCameraBtn.textContent = 'Stop';
            toggleCameraBtn.classList.replace('bg-green-500', 'bg-red-500');
        }
        isCameraOn = !isCameraOn;
    });

    // Function to capture image from the video
    captureButton.addEventListener('click', function() {
        if (!isCameraOn) return; // Don't capture if the camera is off

        const context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        // Menampilkan gambar yang diambil (opsional)
        const imageDataURL = canvas.toDataURL('image/png');
        console.log("Captured Image Data URL: ", imageDataURL);
    });

    // Start camera by default
    startCamera();