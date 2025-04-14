<!-- 3D Model pomocí <model-viewer> -->
    <div class="w-full flex justify-center bg-gray-100 py-10">
        <model-viewer 
            src="{{ asset('storage/3d/hodinkos.glb') }}"
            alt="3D model produktu"
            auto-rotate 
            camera-controls 
            ar 
            shadow-intensity="1" 
            style="width: 100%; max-width: 400px; height: 500px;">
        </model-viewer>
    </div><script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>