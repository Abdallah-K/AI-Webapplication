


<section id="VideoDetectionSec">
    <div class="video_title">
        <h1>Face Detection</h1>
    </div>
    <div class="video_data">
        <div class="video_btn">
            <input type="file" id="upload_video_face">
            <label id="label_face" for="upload_video_face">Upload Video</label>
            <button id="Submit_face">Play Video</button>
        </div>
        <div class="video_display">
            <div id="Video_Container">
                <img src="" id="video_face">
            </div>
        </div>
    </div>
</section>



<script>

    $(function(){
  
        $("#Submit_face").click(function(){
            var global_path = "http://localhost/AI-Webapplication-main/views/video/facedetection"
            var api = 'http://localhost/AI-Webapplication-main/API/uploadfacedetection.php'
            var file_data = $('#upload_video_face').prop('files')[0];   
            var file_data_name = $('#upload_video_face').prop('files')[0].name;   
            var form_data = new FormData(); 
            var port = "2";
            form_data.append('file', file_data);
            var path_video = `${global_path}/${file_data_name}`;
            window.myvar = path_video;
            $.ajax({
                url: api, 
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(data){
                    alert(`${file_data_name} has been uploaded..`);
                    // $("#video_face").attr("src",`http://192.168.1.${port}:5000/face?path=${path_video}`);
                    $("#video_face").attr("src",`http://127.0.0.1:5000/face?path=${path_video}`);
                }
            });
        })





  
    })

</script>

