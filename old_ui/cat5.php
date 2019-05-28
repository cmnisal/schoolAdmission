<?php
 ?>

<!--cat5 = Officer Transfers-->

<?php
include('./api/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admission.lk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admission Form</h2>
  <p>Dear Parent/Guardian,<br> Welcome to our School's Admission Center.<b>Please complete only the sections relevant to the category applied for in the following sections.</b></p>
  <form>
    <div class="form-group">
  <h4>10.0  Children of officers transferred on exigency of service </h4>
       
    <div class="form-group">
      <label>10.1   Date of the last transfer received </label>
    </div>
     <div class="col-sm-4"> 
       
      <select name="dot" id="dot" class="form-control input-sm">
        <option value="0">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
    </div>

    <div class="form-group col-sm-4">
     
      <select name="mot" id="mot" class="form-control input-sm">
        <option value="0">Month</option>
        <option value="1">Jan</option>
        <option value="2">Feb</option>
        <option value="3">Mar</option>
        <option value="4">Apr</option>
        <option value="5">May</option>
        <option value="6">Jun</option>
        <option value="7">Jul</option>
        <option value="8">Aug</option>
        <option value="9">Sep</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
      </select>
    </div>
    
    <div class="form-group col-sm-4">
  
      <select name="yot" id="yot" class="form-control input-sm"><option value="0">Year</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option><option value="1899">1899</option></select>

    </div>
    <br>
    <div class="form-group">
      <label> Date of reporting to work </label>
    </div>
     <div class="col-sm-4"> 
       
      <select name="dor" id="dor" class="form-control input-sm">
        <option value="0">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
    </div>

    <div class="form-group col-sm-4">
     
      <select name="mor" id="mor" class="form-control input-sm">
        <option value="0">Month</option>
        <option value="1">Jan</option>
        <option value="2">Feb</option>
        <option value="3">Mar</option>
        <option value="4">Apr</option>
        <option value="5">May</option>
        <option value="6">Jun</option>
        <option value="7">Jul</option>
        <option value="8">Aug</option>
        <option value="9">Sep</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
      </select>
    </div>
    
    <div class="form-group col-sm-4">
  
      <select name="yor" id="yor" class="form-control input-sm"><option value="0">Year</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option><option value="1899">1899</option></select>

    </div>  
    <br>

    <div class="form-group ">
      <label>10.2 Names and addresses of the work places before receiving the transfer</label>
    </div>
  <div class="form-group">

<table border="0" width="100%">
  <tr>
    <th>Serial No</th>
    <th>Name of the Work Place</th>
    <th>Address of the Work Place</th>
    <th>Distance between the previous place of work (k.m)</th>
    <th></th>
  </tr>
    <tr>
    <td>1</td>
    <td><input class="form-control" type="text" name="now1b" id="now1b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow1b" id="aow1b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow1b" id="dow1b" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>2</td>
    <td><input class="form-control" type="text" name="now2b" id="now2b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow2b" id="aow2b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow2b" id="dow2b" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>3</td>
    <td><input class="form-control" type="text" name="now3b" id="now3b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow3b" id="aow3b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow3b" id="dow3b" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>4</td>
    <td><input class="form-control" type="text" name="now4b" id="now4b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow4b" id="aow4b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow4b" id="dow4b" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>5</td>
    <td><input class="form-control" type="text" name="now5b" id="now5b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow5b" id="aow5b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow5b" id="dow5b" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>6</td>
    <td><input class="form-control" type="text" name="now6b" id="now6b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow6b" id="aow6b" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow6b" id="dow6b" style="width:90%"></td>
    <td><br><br></td>
  </tr>

  </table>
</div>
<br>
    
    <div class="form-group ">
      <label>10.3 Names and addresses of the work places after receiving the transfer</label>
    </div>
  <div class="form-group">

<table border="0" width="100%">
  <tr>
    <th>Serial No</th>
    <th>Name of the Work Place</th>
    <th>Address of the Work Place</th>
    <th>Distance between the present place of work arrived on transfer  (k.m)</th>
    <th></th>
  </tr>
    <tr>
    <td>1</td>
    <td><input class="form-control" type="text" name="now1a" id="now1a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow1a" id="aow1a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow1a" id="dow1a" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>2</td>
    <td><input class="form-control" type="text" name="now2a" id="now2a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow2a" id="aow2a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow2a" id="dow2a" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>3</td>
    <td><input class="form-control" type="text" name="now3a" id="now3a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow3a" id="aow3a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow3a" id="dow3a" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>4</td>
    <td><input class="form-control" type="text" name="now4a" id="now4a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow4a" id="aow4a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow4a" id="dow4a" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>5</td>
    <td><input class="form-control" type="text" name="now5a" id="now5a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow5a" id="aow5a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow5a" id="dow5a" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>6</td>
    <td><input class="form-control" type="text" name="now6a" id="now6a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="aow6a" id="aow6a" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dow6a" id="dow6a" style="width:90%"></td>
    <td><br><br></td>
  </tr>

  </table>
</div>
<br>
  <label>10.4  Number of other schools where the child could be admitted and located closer to the place of residence other than the school applied for </label>
  <input type="text" class="form-control" name="nsclcr" id="nsclcr">
<br>
  <label>10.5  Period of service as a State/Corporation/ Statutory Board/ State Bank employee </label>
  <input type="text" class="form-control" name="pservb" id="pservb">
<br>  
  <label>Declaration</label>
   <p>I hereby declare that my child is not attending any government school; government approved private school or any other school at present for his/ her studies. I also declare that the details furnished above are true and correct and I agree further to submit satisfactory evidence relating to my permanent residence and other information indicated here. I am also aware that my application will be rejected if any information furnished by me is found to be false/ forged. If it is revealed after the admission of my child that the information furnished is false/ forged I agree to remove my child from the school and admit him/her to another school in the area nominated by the Department of Education.</p>
   <input type="checkbox" name="agree" value="agree"> I Agree to Terms and Conditions.
   <br>

   <div class="form-group col-sm-11"></div>
    <div class="form-group col-sm-1">
    <button type="submit" form="nameform" value="Submit" class="btn btn-success">Submit</button>
    </div>





    </div>


  </form>  
</div>  

</body>
</html>