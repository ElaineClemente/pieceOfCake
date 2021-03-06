<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-12 poc-col-l-9">

    <div class="poc-row">
        <div class="poc-content">
            <h1>Tables</h1>
            <p>Table Description
            </p>
            <ul>
                <li><a href="#basic">Basic</a></li>
                <li><a href="#bordered">Bordered</a></li>
                <li><a href="#striped">Striped</a></li>
            </ul>
            <!--   **************************Basic****************************************-->
            <h3 id="basic">Basic Table</h3>
            <p>A simple HTML table, containing three columns and three rows:</p>
            <div class="map-form-item">
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Ashley</td>
                        <td>Kim</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>34</td>
                    </tr>
                    <tr>
                        <td>Bella</td>
                        <td>Kim</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td colspan="2">Total Points</td>
                        <td>180</td>
                    </tr>
                </table>
                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;div class="map-form-item"&gt;
&lt;table style="width:50%"&gt;
  &lt;tr&gt;
    &lt;th&gt;Firstname&lt;th&gt;
    &lt;th&gt;Lastname&lt;th&gt; 
    &lt;th&gt;Age&lt;th&gt;
  &lt;tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Ashley&lt;td&gt;
    &lt;td&gt;Kim&lt;td&gt;
    &lt;td&gt;15&lt;td&gt;
  &lt;tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Eve&lt;td&gt;
    &lt;td&gt;Jackson&lt;td&gt;
    &lt;td&gt;34&lt;td&gt;
  &lt;tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Bella&lt;td&gt;
    &lt;td&gt;Kim&lt;td&gt;
    &lt;td&gt;45&lt;td&gt;
  &lt;tr&gt;
  &lt;tr&gt;
  &lt;td&gt;Total Points&lt;td&gt;
  &lt;td&gt;180&lt;td&gt;
  &lt;tr&gt;
&lt;table&gt;
&lt;div&gt;
</pre>

            </div>
            <!--end of map-for-item-->

            <!--   ********************BORDERED TABLE **************************-->
            <h3 id="border">Bordered Table</h3>
            <p>The following HTML table will be displayed with borders around the table cells:</p>
            <div class="map-form-item">
                <table class="bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ashley</td>
                            <td>Kim</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td>Bella</td>
                            <td>Kim</td>
                            <td>45</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">Total points</td>
                            <td>223</td>
                        </tr>
                    </tfoot>
                </table>
                <h3>Code</h3>
                <pre>
&lt;div class="map-form-item"&gt;
  &lt;table class="bordered"&gt;
	&lt;thead&gt;
	 &lt;tr&gt;
	  &lt;th&gt;First Name&lt;th&gt;
	  &lt;th&gt;Last Name&lt;th&gt;
	  &lt;th&gt;Age&lt;th&gt;
		&lt;tr&gt;
		&lt;thead&gt;
		&lt;tbody&gt;
		  &lt;tr&gt;
		    &lt;td&gt;Ashley&lt;td&gt;
		    &lt;td&gt;Kim&lt;td&gt;
		    &lt;td&gt;15&lt;td&gt;
		  &lt;tr&gt;
		  &lt;tr&gt;
			&lt;td&gt;Eve&lt;td&gt;
			&lt;td&gt;Jackson&lt;td&gt;
			&lt;td&gt;34&lt;td&gt;
		  &lt;tr&gt;
		  &lt;tr&gt;
			&lt;td&gt;Bella&lt;/td&gt;
			&lt;td&gt;Kim&lt;/td&gt;
			&lt;td&gt;45&lt;/td&gt;
		 &lt;/tr&gt;
	&lt;tbody&gt;
	&lt;tfoot&gt;
		&lt;tr&gt;
			&lt;td colspan="2"&gt;Total points&lt;td&gt;
			&lt;td&gt;223&lt;td&gt;
		&lt;tr&gt;
		&lt;tfoot&gt;
	  &lt;table&gt;
	&lt;div&gt;
   </pre>
            </div>
            <!--   ****************************Striped**************************************-->

            <h3 id="striped">Striped</h3>
            <p>For zebra-striped tables add a background-color to all even (or odd) table rows:</p>
            <div class="map-form-item">
                <table class="striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ashley</td>
                            <td>Kim</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td>Bella</td>
                            <td>Kim</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td>Shreya</td>
                            <td>Bharat</td>
                            <td>25</td>
                        </tr>
                    </tbody>

                </table>
                <h3>Code</h3>
                <pre>
&lt;div class="map-form-item"&gt;&lt;table class="striped"&gt;
  &lt;thead&gt;
	&lt;tr&gt;
		&lt;th&gt;First Name&lt;th&gt;
		&lt;th&gt;Last Name&lt;th&gt;
		&lt;th&gt;Points&lt;th&gt;
	&lt;tr&gt;
&lt;thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
   &lt;td&gt;Ashley&lt;td&gt;
	&lt;td&gt;Kim&lt;td&gt;
	&lt;td&gt;15&lt;td&gt;
&lt;tr&gt;
&lt;tr&gt;
	 &lt;td&gt;Eve&lt;td&gt;
	 &lt;td&gt;Jackson&lt;td&gt;
	 &lt;td&gt;34&lt;td&gt;
&lt;tr&gt;
&lt;tr&gt;
	 &lt;td&gt;Bella&lt;td&gt;
	 &lt;td&gt;Kim&lt;td&gt;
	 &lt;td&gt;45&lt;td&gt;
&lt;tr&gt;
&lt;tr&gt;
	 &lt;td&gt;Shreya&lt;td&gt;
	 &lt;td&gt;Bharat&lt;td&gt;
	 &lt;td&gt;25&lt;td&gt;
&lt;tr&gt;
&lt;tbody&gt;

&lt;table&gt;
&lt;div&gt;
</pre>
            </div>
        </div>

</section>
