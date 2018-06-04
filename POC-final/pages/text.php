<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Text</h1>
            <p>Piece of Cake easily realign text to components with text alignment classes.</p>

            <ul>
                <li><a href="#alignment">Text Alignment</a></li>
                <li><a href="#centering">Centering Elements</a></li>
                <li><a href="#effects">Special Effects</a></li>
            </ul>

            <h3 id="alignment">Text Alignment</h3>
            <p>The poc-left-align and the poc-right-align classes are used to align text.</p>
            <div class="map-form-item">
                <p class="poc-left-align">Left aligned text.</p>
                <p class="poc-center">This text is centered.</p>
                <p class="poc-right-align">Right aligned text.</p>
                <p class="poc-justify">This text is justify.</p>

                <h3>Code</h3>
                <pre>
&lt;p class="poc-left-align"&gt;Left aligned text.&lt;/p&gt;
&lt;p class="poc-center"&gt;This text is centered.&lt;/p&gt;
&lt;p class="poc-right-align"&gt;Right aligned text.&lt;/p&gt;
&lt;p class="poc-justify"&gt;This text is justify.&lt;/p&gt;
               </pre>
            </div>

            <h3 id="centering">Centering Elements</h3>
            <p>The poc-center class is also used to center-align elements:</p>
            <div class="map-form-item">
                <div class="poc-center">
                    <img src="../images/poc_small.png" alt="poc logotype">
                    <p>This image is centered.</p>
                </div>

                <h3>Code</h3>
                <pre>
&lt;div class="poc-center"&gt;
    &lt;img src="../images/poc_small.png" alt="poc logotype"/&gt;
    &lt;p&gt;This image is centered.&lt;/p&gt;
&lt;/div&gt;
                </pre>
            </div>


            <h3 id="effects">Special Effects</h3>
            <p>The poc-opacity class is designed to work with all colors, opacity and text-shadow.</p>

            <div class="map-form-item">
                <h4>Text-Opacity</h4>
                <div class="poc-brown poc-container">
                    <h1 class="poc-opacity">poc-opacity</h1>
                </div>
                <div class="poc-dark-red poc-container">
                    <h1 class="poc-opacity-max">poc-opacity-max</h1>
                </div>
                <div class="poc-pale-green poc-container">
                    <h1 class="poc-opacity-min">poc-opacity-min</h1>
                </div>
                <div class="poc-pale-yellow poc-container poc-border-blue">
                    <h1 class="poc-opacity-off">poc-opacity-off</h1>
                </div>

                <h4>Text-Shadow</h4>
                <div class="poc-pale-red poc-container">
                    <h1 class="poc-text-shadow">poc-text-shadow</h1>
                </div>
            </div>

        </div>
    </div>

</section>
