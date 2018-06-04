<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Buttons</h1>
            <p>POC provides different styles of buttons and are ready to be used in different ways.
            </p>
            <ul>
                <li><a href="#primaryBtn">Primary</a></li>
                <li><a href="#defaultBtn">Default</a></li>
                <li><a href="#outlineBtn">Outline</a></li>
                <li><a href="#disabledBtn">Disabled</a></li>
                <li><a href="#differentSize">Different Size</a></li>
                <li><a href="#fullWidth">Full Width</a></li>
            </ul>
            <!--***General Button*************-->
            <div class="article">
                <h3 id="primaryBtn">Primary Button</h3>
                <p>Here is a standard buttons with different background color.</p>
                <button class="poc-btn-primary">Primary</button>
                <button class="poc-btn-success">Success</button>
                <button class="poc-btn-danger">Danger</button>

                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;button class="poc-btn-primary"&gt; Primary &lt;button&gt;
&lt;button class="poc-btn-success"&gt; Success &lt;button&gt;
&lt;button class="poc-btn-danger"&gt; Danger &lt;button&gt;
                </pre>
                <button class="poc-btn-default poc-btn-xs" onclick="moveTop()" id="top" title="Go to top">Top</button>
            </div>
            <!-- Default Button -->
            <div class="article">
                <h3 id="defaultBtn">Default Button</h3>
                <p>Here is a Default button with background color grey.</p>
                <button class="poc-btn-default">Default</button>

                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;button class="poc-btn-default"&gt;Default&lt;button&gt;
                </pre>
            </div>
            <!-- Outline Button -->
            <div class="article">
                <h3 id="outlineBtn">Outline Button</h3>
                <p>Here is a outline button with border only.</p>
                <button class="poc-btn-outline">Outline</button>


                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;button class="poc-btn-outline"&gt;Outline&lt;button&gt;
                </pre>
            </div>
            <!-- Disabled Button -->
            <div class="article">
                <h3 id="disabledBtn">Disabled Button</h3>
                <p>Here is a Disabled button.</p>
                <button class="poc-btn-disabled">Disabled</button>

                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;button class="poc-btn-disabled"&gt;Disabled&lt;button&gt;
                </pre>
            </div>
            <!-- Different Sizes Button -->
            <div class="article">
                <h3 id="differentSize">Different Size Button</h3>
                <p>POC provides different size of buttons.</p>
                <button class="poc-btn-primary poc-btn-lg">Large</button>
                <button class="poc-btn-success poc-btn-md">Medium</button>
                <button class="poc-btn-danger poc-btn-sm">Small</button>
                <button class="poc-btn-primary poc-btn-xs">X-Small</button>

                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;button class="poc-btn-primary poc-btn-lg"&gt;Large&lt;button&gt;
&lt;button class="poc-btn-success poc-btn-md"&gt;Medium&lt;button&gt;
&lt;button class="poc-btn-danger poc-btn-sm"&gt;Small&lt;button&gt;
&lt;button class="poc-btn-primary poc-btn-xs"&gt;X-Small&lt;button&gt;	
                </pre>
            </div>
            <!--Full width Button-->
            <div class="article">
                <h3 id="fullWidth">Full Width Button</h3>
                <p>Here is a Full width button.</p>
                <button class="poc-btn-primary poc-btn-w100">100%</button>
                <button class="poc-btn-success poc-btn-w50">50%</button>
                <br/>
                <button class="poc-btn-danger poc-btn-w10">15%</button>
                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;button class="poc-btn-primary poc-btn-w100"&gt;100%&lt;button&gt;
&lt;button class="poc-btn-success poc-btn-w50"&gt;50%&lt;button&gt;
&lt;button class="poc-btn-danger poc-btn-w10"&gt;10%&lt;button&gt;
                </pre>
            </div>

        </div>
    </div>

</section>