


<section id="VideoDetectionSec">
    <div class="video_title">
        <h1>Face Mesh Detection</h1>
    </div>
    <div class="video_data">
        <div class="video_btn">
            <input type="file" id="upload_video_mesh">
            <label id="label_mesh" for="upload_video_mesh">Upload Video</label>
            <button id="Submit_mesh">Play Video</button>
        </div>
        <div class="video_display">
            <div id="Video_Container">
                <img src="" id="video_mesh">
            </div>
        </div>
    </div>
</section>



<script>

    $(function(){
  
        $("#Submit_mesh").click(function(){
            var file_data = $('#upload_video_mesh').prop('files')[0];   
            var file_data_name = $('#upload_video_mesh').prop('files')[0].name;   
            var form_data = new FormData(); 
            var port = "2";
            form_data.append('file', file_data);
            var path_video = `http://localhost/Websites/AI/views/video/facedetection/${file_data_name}`;
            window.myvar = path_video;
            $.ajax({
                url: 'http://localhost/Websites/AI/API/uploadfacedetection.php', 
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(data){
                    alert(`${file_data_name} has been uploaded..`);
                    // $("#video_mesh").attr("src",`http://192.168.1.${port}:5000/mesh?path=${path_video}`);
                    $("#video_mesh").attr("src",`http://127.0.0.1:5000/mesh?path=${path_video}`);
                }
            });
        })



  
    })

</script>

