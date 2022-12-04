<?php include("./views/components/tensorflowcom/tensohome.php")?>
<section id="CNNintro">
    <div class="cnntitle">
        <h1>Convolution Neural Network(CNN)</h1>
    </div>
    <div class="cnndata">
        <p>Is a particular implementation of a neural network used in machine 
            learning that exclusively processes array data such as images, and is 
            thus frequently used in machine learning applications targeted at 
            medical images.(CNNs) are analogous to traditional ANNs in that they 
            are comprised of neurons that self-optimise through learning. Each 
            neuron will still receive an input and perform a operation (such as a 
            scalar product followed by a nonlinear function) - the basis of 
            countless ANNs. From the input raw image vectors to the final output 
            of the class score, the entire of the network will still express a single 
            perceptive score function (the weight). The last layer will contain loss 
            functions associated with the classes, and all of the regular tips and 
            tricks developed for traditional ANNs still apply. The only notable 
            difference between CNNs and traditional ANNs is that CNNs are 
            primarily used in the field of pattern recognition within images. This 
            allows us to encode image-specific features into the architecture, 
            making the network more suited for image-focused tasks - whilst 
            further reducing the parameters required to set up the model. One of 
            the largest limitations of traditional forms of ANN is that they tend to 
            struggle with the computational complexity required to compute 
            image data. Common machine learning benchmarking datasets.</p>
    </div>
</section>
<div class="ModelTitle">
    <h1>General Model of CNN:</h1>
</div>
<section id="Convolutionlayers">
    <div class="convotitle">
        <h1>1-Convolution Layer</h1>
    </div>
    <div class="convobody">
            <p>An image to be classified is provided to the input layer and output is 
            the predicted class label computed using extracted features from 
            image . An individual neuron in the next layer is connected to some neurons in the previous layer, this local correlation is termed as receptive field . The local features from the input image are extracted using receptive field. The receptive field of a neuron associated to 
            particular region in previous layer forms a weight vector, which 
            remains equal at all points on the plane, where plane refers to the 
            neurons in the next layer .As the neurons in plane share same 
            weights, thus the similar features occurring at different locations in 
            the input data can be detected . This has been depicted in figure 
            shown below.<br>
            Neurons in the previous layer, this local correlation is termed as 
            receptive field . The local features from the input image are extracted 
            using receptive field. The receptive field of a neuron associated to 
            particular region in previous layer forms a weight vector, which 
            remains equal at all points on the plane, where plane refers to the 
            neurons in the next layer .As the neurons in plane share same 
            weights, thus the similar features occurring at different locations in 
            the input data can be detected . This has been depicted in figure 
            shown below.  
            </p>
    </div>
</section>
<section id="pooling">
    <div class="pooltitle">
        <h1>2-Pooling Layer</h1>
    </div>
    <div class="poolbody">
        <p>
            The exact location of a feature becomes less significant once it has 
            been detected .Hence, the convolution layer is followed by pooling or 
            sub-sampling layer. The major advantage of using pooling technique is 
            that it remarkably reduces number of trainable parameters and 
            introduces translation invariance . To perform pooling operation, a 
            window is selected and the input elements lying in that window are 
            passed through a pooling function.<br>
            The pooling function generates another output vector. There exist few pooling techniques like average pooling and max-pooling, out of which max-pooling is the most commonly used technique which reduces map-size very significantly . While computing errors, the error is not backpropagated to winning unit because it does not take part forward flow.
        </p>
    </div>
</section>
<section id="Full">
    <div class="fulltitle">
        <h1>3-Fully Connected Layer</h1>
    </div>
    <div class="fullbody">
        <p>Fully connected layer is similar to the fully connected network in the 
            conventional models. The output of the first phase (includes 
            convolution and pooling repetitively) is fed into the fully connected 
            layer, and dot product of weight vector and input vector is computed 
            in order to obtain final output. Gradient descent, also known as batch 
            mode learning or offline algorithm, reduces the cost function by 
            estimating the cost over an entire training dataset, and updates the 
            parameters only after one epoch, where an epoch corresponds to
            traversing the entire dataset. It yields global minima but if the size of training dataset is large, the time required to train the network substantially increases. This approach of reducing the cost function was replaced by stochastic gradient descent.
        </p>
    </div>
</section>
<section id="actpage">
    <div class="acttitle">
        <h1>4-Activation function</h1>
    </div>
    <div class="actbody">
        <p> 
            A vast literature exists which uses sigmoid activation function in the 
            conventional machine learning algorithms. In order to introduce non linearity, use of Rectified Linear Unit (ReLU) has proved itself better 
            than the former, because of two major factors. First, calculation of 
            partial derivative of ReLU is easy . Second, while considering training 
            time to be one of the factor, the saturating non-linearities like sigmoid 
            represented by fx=(1 + e-x-1)are slower than non-saturating non linearities like ReLU represented by fx=max(0,x). Third, ReLU does not 
            allow gradients to disappear. But efficiency of ReLU deteriorates 
            when a large gradient is flowing through the network, and update in 
            weight causes the neuron not to get activated leading to Dying ReLU 
            problem which is a considerable issue that is often caused. This issue 
            can be resolved using Leaky ReLU, if x>0, the function activates as 
            f(x)= x and if x<\0,the function activates as αx, where α is a small 
            constant.
        </p>
    </div>
</section>