<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="views/styles/homestyle/navbar.css"/>
    <link rel="stylesheet" href="views/styles/homestyle/footer.css"/>
    <link rel="stylesheet" href="views/styles/opencvstyle/opencv.css"/>
</head>
<body>
    <section id="OpencvPage">
        <?php include("./views/components/homecom/navbar.php")?>
        <div class="opencvhead">
        <iconify-icon icon="logos:opencv"></iconify-icon>
        </div>
    </section>
    <section id="opencvAbout">
        <div class="opencvtitle">
            <h1>Overview</h1>
        </div>
        <div class="opnecvdata">
            <p>OpenCV (Open Source Computer Vision Library) is an open source computer vision and machine learning software library. OpenCV was built to provide a common infrastructure for computer vision applications and to accelerate the use of machine perception in the commercial products. Being an Apache 2 licensed product, OpenCV makes it easy for businesses to utilize and modify the code.<br>
            The library has more than 2500 optimized algorithms, which includes a comprehensive set of both classic and state-of-the-art computer vision and machine learning algorithms. These algorithms can be used to detect and recognize faces, identify objects, classify human actions in videos, track camera movements, track moving objects, extract 3D models of objects, produce 3D point clouds from stereo cameras, stitch images together to produce a high resolution image of an entire scene, find similar images from an image database, remove red eyes from images taken using flash, follow eye movements, recognize scenery and establish markers to overlay it with augmented reality, etc. OpenCV has more than 47 thousand people of user community and estimated number of downloads exceeding 18 million. The library is used extensively in companies, research groups and by governmental bodies.<br>
            Along with well-established companies like Google, Yahoo, Microsoft, Intel, IBM, Sony, Honda, Toyota that employ the library, there are many startups such as Applied Minds, VideoSurf, and Zeitera, that make extensive use of OpenCV. OpenCV’s deployed uses span the range from stitching streetview images together, detecting intrusions in surveillance video in Israel, monitoring mine equipment in China, helping robots navigate and pick up objects at Willow Garage, detection of swimming pool drowning accidents in Europe, running interactive art in Spain and New York, checking runways for debris in Turkey, inspecting labels on products in factories around the world on to rapid face detection in Japan.<br>
            It has C++, Python, Java and MATLAB interfaces and supports Windows, Linux, Android and Mac OS. OpenCV leans mostly towards real-time vision applications and takes advantage of MMX and SSE instructions when available. A full-featured CUDAand OpenCL interfaces are being actively developed right now. There are over 500 algorithms and about 10 times as many functions that compose or support those algorithms. OpenCV is written natively in C++ and has a templated interface that works seamlessly with STL containers.</p>
        </div>
    </section>
    <section id="opencvhistory">
        <div class="opencvtitle">
            <h1>History</h1>
        </div>
        <div class="opnecvdata">
            <p>Officially launched in 1999 the OpenCV project was initially an Intel Research initiative to advance CPU-intensive applications, part of a series of projects including real-time ray tracing and 3D display walls. The main contributors to the project included a number of optimization experts in Intel Russia, as well as Intel's Performance Library Team. In the early days of OpenCV, the goals of the project were described as:<br>
            1-Advance vision research by providing not only open but also optimized code for basic vision infrastructure. No more reinventing the wheel.<br>
            2-Disseminate vision knowledge by providing a common infrastructure that developers could build on, so that code would be more readily readable and transferable.<br>
            3-Advance vision-based commercial applications by making portable, performance-optimized code available for free – with a license that did not require code to be open or free itself.<br>
            The first alpha version of OpenCV was released to the public at the IEEE Conference on Computer Vision and Pattern Recognition in 2000, and five betas were released between 2001 and 2005. The first 1.0 version was released in 2006. A version 1.1 "pre-release" was released in October 2008.<br>
            The second major release of the OpenCV was in October 2009. OpenCV 2 includes major changes to the C++ interface, aiming at easier, more type-safe patterns, new functions, and better implementations for existing ones in terms of performance (especially on multi-core systems). Official releases now occur every six months and development is now done by an independent Russian team supported by commercial corporations.
            In August 2012, support for OpenCV was taken over by a non-profit foundation OpenCV.org, which maintains a developer and user site.<br>
            In May 2016, Intel signed an agreement to acquire Itseez,a leading developer of OpenCV.
            In July 2020, OpenCV announced and began a Kickstarter campaign for the OpenCV AI Kit, a series of hardware modules and additions to OpenCV supporting Spatial AI.
            </p>
        </div>
    </section>
    <section id="opencvpro">
        <div class="opencvtitle" id="newtitle">
            <h1>Programming language</h1>
        </div>
        <div class="opnecvdata" id="newdata">
            <p>OpenCV is written in C++ and its primary interface is in C++, but it still retains a less comprehensive though extensive older C interface. All of the new developments and algorithms appear in the C++ interface. There are bindings in Python, Java and MATLAB/OCTAVE. The API for these interfaces can be found in the online documentation. Wrappers in several programming languages have been developed to encourage adoption by a wider audience. In version 3.4, JavaScript bindings for a selected subset of OpenCV functions was released as OpenCV.js, to be used for web platforms.<br>
            If the library finds Intel's Integrated Performance Primitives on the system, it will use these proprietary optimized routines to accelerate itself.<br>
            A CUDA-based GPU interface has been in progress since September 2010.<br>
            An OpenCL-based GPU interface has been in progress since October 2012,documentation for version 2.4.13.3 can be found at docs.opencv.org.<br>
            OpenCV runs on the following desktop operating systems: Windows, Linux, macOS, FreeBSD, NetBSD, OpenBSD. OpenCV runs on the following mobile operating systems: Android, iOS, Maemo, BlackBerry 10. The user can get official releases from SourceForge or take the latest sources from GitHub. OpenCV uses CMake.
            </p>
        </div>
    </section>
    <section id="opencvwho">
        <div class="opencvtitle" id="titlewho">
            <h1>Who Uses Opencv?</h1>
        </div>
        <div class="opnecvdata" id="datawho">
            <p>OpenCV is used by big enterprises and government institutions, for example, Google, Toyota, IBM, Microsoft, SONY, Siemens, and Facebook. Also, well-known computer vision startups use OpenCV to build powerful computer vision products and AI solutions – including viso.ai. Many research centers use OpenCV, such as Stanford, MIT, INRIA, Cambridge, and CMU.<br> The use cases of computer vision are vast. While most are aware of rather popular use cases in security and video surveillance or self-driving cars, fewer people get to see the use cases in specific industries such as industrial manufacturing or retail analytics.<br> The rapid advances in computer vision over the past years made it possible for companies across industries to develop purpose-built computer vision applications that solve highly-specific problems (detect product issues, count objects, analyze behavior, etc.).
            </p>
        </div>
    </section>
    <section id="opencvcon">
        <div class="opencvtitle">
            <h1>Conclusion</h1>
        </div>
        <div class="opnecvdata">
            <p>Finding the passion and vision for image processing and computer vision applications allow entrepreneurs to empower their clients. With the demand for image-based search engines, both entrepreneurs and software developers will emerge victorious using tools such as OpenCV.
            <br><br>
            If your entrepreneurial journey needs a software development company that offers software developers who are knowledgeable in computers. Consult with us and find help, as we showcase our competent resources with adept knowledge in C++, Java, and Python coupled with the OpenCV library. We will build solutions to your computer vision business idea whether it is a new or existing deployment.
            <br><br>
            Full Scale is one of the leading offshore service providers in Cebu! Our developers can learn OpenCV and other computer vision libraries in a short period and immediately use them in their tasks.
            <br><br>
            You can hire and build your own dedicated software development team through our Guided Development program, which allows you to have an overview and control of your team while we take care of recruiting, assessing, and employing the top developers that we can find to work on your project. You don’t have to worry about the tedious process of hiring developers on your own anymore.
            <br><br>
            Computer vision is not just an interesting field but a revenue-generating business. However, the realistic woes that most entrepreneurs faced are expenses and scarcity of resources. Despite the massive interest, there are still areas under computer vision that has limitations. All these issues will be addressed intelligently by our pool of project managers, engineers, and software developers.
            </p>
        </div>
    </section>
    <?php include("./views/components/homecom/footer.php")?>
</body>
</html>