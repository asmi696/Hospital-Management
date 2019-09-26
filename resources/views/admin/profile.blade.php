@extends('admin.header')
@section('content')
<aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVwAAACRCAMAAAC4yfDAAAABaFBMVEX///8gHh8AAAAAiAAAgQAAUgD//v8AlAAAXgAAfwAAhgAAjQD5+fkAggAAfAAAZgAAcAAAWgDHxcYAmQAAqQAAdQAAbAAAogAApQAAnQAXFBUAcQCzs7MAVgAAkgHulJfO5M/B3cEATwCWlZYARwCr0axnZmfs7OwBYwEQDQ5Hm0UASgDY2NiHhocAQgDj4+M8nDt7e3s7OTppZ2hnqWTb69q6ubmgoKA/PT7w+vLV8NTr+OpYV1dycnLS0dIwLi+TxJQoJifn7ucvajCf059zvnFLr001pDUjniU2oTlSt1JcrF+32bV/uXxmwGGI0IstrTCi2qJ3yHR9tX9Qlk9Ku0qsyK1voW8fhiFVj1NWrlZstHCGzoMwgS7O7cyozaf23d6bupqUyZUedR5fjlxooWhKiEvS4NOUsZRzmHGDq4McXxomhSglXyNIeUdrjm0lbiIibCG65bs9cTu90btPelIAMACDoYMTYJ9bAAAQ8ElEQVR4nO2djV/aSBrHxwApYIiA8iIGF0F5qWAECyHypra7V1tttS+eu17r1e6dfdm93eu613//5pmZJJMA1t5qrXvz62dbmISQfPnlmWeeGViEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhIRuuGT2H/5bvt4zERL6LJkv73373V/u37+//d3RvZx53afzJ1Ln3oPZW9OgW7fm5ycnfZMPdwTfS5CM1r9NzRJRuhRveHK3ed2ndvPVfDSbSqUsuLcYXMDrP+pc98ndbJmPU0TMt9M220mfz+f3b1z3+d1kre+l0mlm3GmXcQFuJKzeFrHhfxHks/upGcLWDZexDYfDEX9IXcJRWaS+n68nwNZj3Pl5F1x/KPEUIUH3MyWbD9JpB+60Oyr4AG4E4PoTd677VG+gnqdngC3nXJdxfZRtSA0lnl33qd4wyej5zMyMbVxKdtqG6xg3pKqqoPs5wp3ZIxwTAG4Kg9374VusH+5jqi7j4v6Mwo2KyPA5epwiaGdTjz6s241mbuM7n8/uzSzjYrrJDdGnXVgfgO3M7IMPUEFwYTOPtyM2XGpcNZFITC0IuhdUB9CmHq2P3rqwGmIh12abSETFUPiCwp1Z6vkYtKClsJ+LChSu6NQuIhkPzNLpffpwzB7mHRWz9Tts5+amDr7kSd5Ymen0Htzk44IoaV9SQ5xx5+ai0aSo8F5AT1JPLrBXLhzyqxzcZPKvV35mN17y+vT+hXbsHKqqExai0Wgwd7Vn9mfQ8/2LZFWyRdeOCsmp76/+5G64Xl7Mt6DOYcLxbTKZFNb9hOSX3pZz+qlmIsHDFda9mCAwmB8e//CX+7PT97d/OFoaPeOwkHSiAoYbE/MSF5J57zk3bTY5GZ48Whix20aSsqVwyyJh+ISIaf+WmuXKuKTQ6Iv4TobT32dzjnExXZHrflL76ZQzAcFNP0RCT730mlGa5BK6UzExTPuEzOf2dLoLLhRxQ+oGvyt28XGSGReznSr/85rO+aZoPQ1zZ87MGbcMBEph6k+eXuuFw3aqHNu6npO+IXqZYjNnQ2zZZLo/cewKvAtlx7hlERfO0zpmOzM0K2nBjUSgoDD3D9dLniUduMEfr+m8b4Dkjj0tOczWRxcqhDBdKN7a5m0GoxbbcjBIezw9Pqy+8z5K3yjUe/WaES95T6EUN2p4U8HoK07jqMPR4/397/D3AlFu+IKa3i2sgSlnlfhlmMTa2Tg5Odk4XuggdAVLMeicr2utgse41nzvTyb39s9s45bLgVPSpEnDKlr799cqklQB4dZunD8DrS3ZmypFe1NtxOGkLmz55hs4j20/6OHQ9Zg+P9Sd/ardTxyrfk6hyOoOvY7OEXYO3hcuMbK9dOlsYf1S2mLLw7WW2EQIXFKtmXvB5WRnQdadYedmX1FI0oRXmTW6t9KTKnyz1LMvpD+QMq5NXWbsQsV7NOt4GC7WahhurCG4aDfiC+M/vvBti9aS3we74q4jFCEvUk+g+aU/AovfVm8fhsjmK5jO7qR5446IuJZxPdM6ry225WCMBt0RcCsUbqnh3UQtSF6U8b6molO4w4fzwAWCQ0RyhBTQVC0vUrihhVwut7NKtkWgmT6Cma2XYF1/YufS4T6hEddZj3vLC9eZfEhyvdqrshUVgsH3LrgZRxKF22YmJHc2hSnVyJa49RqyyXp9icK1DzOxaX0mn4a7CmyP7hC87E6jcFXTfhzehocq8fPRTs5EuR2IxpeeUp5rXGsViAU3OvXKep3cidlsgzTTZXAlXeEEGwyJQTPwpniX7VbFWxRmW6kYLym6NqhwfucOUmqzT6SrfAruhh+GPc2mCsbY5eFGjneWlk4gYoQPSTjeUMmTiD98ePvpzlXMZD9Oe7ozfjWux7h4WFbOMbYI/bNM2ALc/CkP15sMKNZNTW93VJegUxsUkI1dKrA9uwyi7jpAacCa6/Q5H3PdcOVmBGICbnwIW0P0bClcH465foi5k7vM0TuHNAbDhfpDuJu77C5tj48K3nXkDlyrhJt8bXdqB0HLuMEAGUZYcBXPW7BbX9LYc6Vd1/r0E6COzLStXXU3bKpqJeNuHQ8XM8WtfhxHm+T2X3VCAVXYD9t9J2z33MbDw3CIdGxWN3eJWk8N52HzYyIuKdZM2RXGTtaOCoE30MDgZoqOiNWYPStD6S1SGEvDbqHWzXS5nVosFNsfzjlwdwjGww0sinIDWlmH1jRNs5NbJY+P8JubIHwdzZ1d6l/1kkPD4/R5ETfsWgRCizXBM+u1ry3jxrJv4flwh1YhlqzTSDoYfvcqg+ukvTW6b8PZxwrY3E5j4ZrUnT7cU0RoxhCB6Mp3aJCpwT4IQZ8XCdGw3ARD+9TcH4PplT2AmLXz23l3WcGOCqyEO/XaZJHpXdCG+y94PpyKUQcWPfe+ozjXt1FZya3dUGNsJ5x9eLg4m7WEM94jEkLJUCHC7vXbyILrP15aWjq+YzcvkGwhstsxUWeXdI7blxtzzRkScmdn976997IJWtg4mrdWNUZGGBdb18oYzmIsKsSyd3m43ICKAF0bC7c/BJc5d9N6XmQhpcHHFC5bIBagWqUpri+y0KRXQp6FcDd1TID6yECMvMYfBkNvhEiiq4bDKuzg377kqAAlm/Ts3r67otg8uR/x8XATHNwpe+qhk2XGjWV/hudWh2ZotlqjgCEb1HBY6FX4D0Jpsx34GGzB3YaTc6SuonAI5wOqHSgeqn5o6ODhL9uHjn8jh7sd4tHcwzCMfSNkFLp6fNm5wof0TOoBzP2S48rwbR76DfX1hzhLca9pxN1ZlAx5g+/Yq8s2XDKKGJctGN4UrSEVDWJW1qFVnOSgQYNAjzzRN+nHIvXcB6Rwc16Z7B+LEXveQR1+r2aHeoNeZ3Nh6Xhj43gnd+mFGxk9Tu29HHPI9duqPzRsXEKXWfd7ihbDzULLuDxX96RiOBjAgAxGCiyv3ZSdTc6ufcmTglmicL96Pdkf83FB4wK30Dlhz/ZixVjUfRejcLNuuF7nWggrNLSWaGSuQJrG0qwKK57pmxPO52OnYC3v8W4GXPm8iVtYNJpwLQyzqoxBFnUPsjQoZLMBDm6lwKkGpPsWpnqr36pJ/CiMjWsrmUK836rzVmXBBB+u2ncUh+NRuEatUDMKJdSKt2q1Gg7bOMKXjCp+jN9VqVVRQUdVsqUGbXiHgl6t11tI6+OPEb9FrYX3rBl9ZNQLpRI+U0Mfg+IqJKPjhJpw5WG0nkBHZOg0YBn3veLAnahwklgNhm2Bwu0Ef6+XrKIYt4lmxwOrWlZxFXSrNtxqXIpX8cikVqjX9Cp+n55U1Qethl7V2/GWVFfwLdQa6H0J/6lWtQkcnuAVbWMNj1niONnDTxqFalfr1nVNqkpF5C4zX71yHNyoXR0P0gnfrawNF6GRJUcrRgyVD60yAdIz3rItq840vKVIx+8sLAC9Qbc7MGqNbhdD79U3q+14ptvVjFpPy8S7wLBQa5ekbreLpCr2Kf5E4+0ewMVDGnysdgsVC3CO7cKgqxW/MFzU+ckKCs68TjkY2CKTJFnG1pWKjYKLWhmubou7M2fAq6xJFdcm1n19Gm5JKsmZKjiXHq0XNwZdQIqqExLqNjQgWd3UELl9jJ5UKuBO1Oj2NOZcCteAY2a0TVlqfGm4qPNizh1xIf9icw9ZGnGzATaIGCErdVC0rn1/NwquhEKvtZ1pHMPqDjdHHY0PCwQuBlMr9Bo9uNWLGibaknprPYTvcQPeutXAwaAlrfWKuoLblHa3N6EXG71if1Ds4jF2o4W6mlapD+q6hLuGK4Gra4W1drvR7hYLWtXb2ZsvovaSRsY2GLtLEgrWnWXzZPgrKyPEHUjR4y2s/nABBylV2BTn33vUwbBksomm5fhAJQV2LGGRx3KJPoZmeBv4i7TghhIcXK/SBgVV4R6gzQpEbHqAy1a/jk1SsUotkjTR1dyX35mLurozgJsn5fEyiwr5Xy79rP4MkrUG6aQxVlAmQ+OeO7TnktEhuCRf+JWyzS6/uZ6z/7oVJ1Ov2K7tYg2y0l63PYA5q4zU5lP3nTJLFaasEW/gLYQFC+6iWHMzJAWy9ow0UYcJrLhm0LQfEwbAUtuuVcno3RSXKjjVhF+ztD9bOb2+i/hKVYKak9TWFFjxUqjxqmO+FanmBPgXHrixZah0/DtL6AYWxVI8j0qbmYkKzgJRqUUMi4eIBQPKhQYhvdbISAPbvM3ylIttdhnMGiRoA/n313gZX6UUzFbqKWQJF2ZbMFp9vWRNZev9Fh7lNCrOvNWrMhdxY6QPkxENCoH879d5IV+juhUyMVjSCNrWUHqr6C2jt+mU+34tu+F+xHDzFK5IFjzCo32o5elg2xHrDomwqbt2EWAhxrPN5n/Ew4t8jBhX9Gdu6RKpSFeBrVbqfHj86Pne3vMHTx67V54o1QKdBiCLQJyIi+HiMdrWMjFuIC++cuJSsQKLtcC3Rl9en02TeUoyBzw/7fp+lBJvMO82sxzcQCCL0OkyYbssQq5LugRzgIQtHmJ3UjNs3Q1ZiDfvm3xKZvDoHIW+xuLu90HHuBgpQmcU7qIIuS7VKlIVKRqEBHianrGcS1Y5zk/6/A+dCWGlQEdruWzZiriY6SJCb/LANrAislyXpEodyXHsW9qT2QvGLLiTk2H1jhNJWSXnrm1cCvctgZv/7Vou4atVH+qsOChYk0ZP3MadJ0tCQuqx/QIK9yAbs42bx2Hht4CICsMyoHCMg4I1ALuX5oxLv9wHy8QSz/jUQUZmzIkKedyhsZArooJLa1IcVQsFq64oN1M2WxoVYLmNP6QmEu4vVr+1g0Ig/zPaWiS5wi/iB0ldGkgyalkBF7Tnibi+MIObfMW/7izgwP0dkgXozsQIwi0cFUpGgfuO2H5qyLgAF+j+lTOm6TgXD39Jf0ZneIRsKZKB+gWDqyZ0Zt3GpVEBJtXnpvivTv6YZWwDiwfoPcnDzoYO//+tktRHGm9c+OkrZtx5y7ghBjfK/1rFq7wFd+W0syLysBEqSaWSYbiKNc1ZPg8LO8aNJpNBhy4MeGnIXVZeLQfyIuIOqSQhvdByd/FPpu2IS+CGHLhJa+Edks0YMy527G/5QF5UcockSzjk9t1tnWnOuBHHuGRiMmsHVjxuIHCX3+CokBcj3xEaoLjhLeHu33KMS7/u68Atx6zRxNt8gBh3ZevNMmYrBmfDKqKWNrS6ZPuWO1VQHbbl4F2205tlwjZ/F2XzojcbqQLShlYUo479szYRvjujcAPMo2eLBO7iATwQQWGUNKSNWHP2YdIeQDDjzjHjloPBRVqCPKVw8+bdfF6kuCNVRVp1RPOJzzOAsFbk2l81Q1sreVIIO1sJrHz8sid9c9QaXqEuy2jXxxvXhktqYdSnW4vUuD8HFn8X9ZoxGgEXaghHftcAwurOYPFHgCxwBrg4HhwsLoqawljFR363Ans35KNfPrPZWnCpdQHu8u+dPGYr/peq41QdvVIBfuFhlHHBuTCZDnBxUPhlRcSEc6SPg4sWIqo3D2NLwqCOcIo7stOz/7z9kud641QaCxeZz+Y8bIN0YQ2sHz9bWTkwlw+Eb8+Tct7y/yV1LpGAxeQsx43RekJg0UQH/zlAb0Ul7I/IfJqMeiIugXuGPp6hLbF46Q+q8+41W5HrwM3jbkwMeC9F5tk/pmIwlw5RIZ9fXly5+1H8PPnlycy9+vG3f2O473/+18czYdorEP0NIyKRIwgJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCf0J9V+7B6WRZcyL8gAAAABJRU5ErkJggg==" alt="">
        <div class="info">
          <h3><a href="#">{{ Auth::user()->name }}</a></h3>
          
        </div>
      </div>
      <div class="search">
        <input type="text" placeholder="Type here" style="background:pink;color:black;"><i class="fa fa-search"></i>
      </div>
      <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="#">PATIENTS DETAILS</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">ADD PATIENT</a></li>
            <li><a href="#">EDIT PATIENT</a></li>
            <li><a href="#">DELETE PATIENT</a></li>
            <li><a href="#">BLOCKED PATIENT</a></li>
          </ul>
        </li>
        <li><i class="fa fa-support fa-fw"></i><a href="#"> Subscribe us</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <li><i class="fa fa-envelope fa-fw"></i><a href="#"> Contact us</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <li><i class="fa fa-users fa-fw"></i><a href="#"> Our team</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <li><i class="fa fa-bolt fa-fw"></i><a href="#"> Testimonials</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <p>Example:</p>
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Messages <span class="num dang">56</span></a></li>
        <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <li><i class="fa fa-laptop fa-fw"></i><a href="#"> About UI &amp; UX <span class="num succ">43</span></a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="#"> Something else</a></li>
      </ul>
    </aside>
    
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        
      <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
      <script src='js/main.js'></script>
      <style>* {
  padding: 0;
  margin: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: 'Droid Sans', sans-serif;
  outline: none;
}
::-webkit-scrollbar {
  background: transparent;
  width: 5px;
  height: 5px;
}
::-webkit-scrollbar-thumb {
  background-color: #888;
}
::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.margin {
  margin-left: 0 !important;
}
/* Start side navigation bar  */

.side-nav {
  float: left;
  height: 100%;
  width: 290px;
  background-color: #252636;
  color: #CCC;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  transform: translateX(0);
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  transition: .3s;
  position: fixed;
  top: 0;
  left: 0;
  overflow: auto;
  z-index: 9999999
}
.side-nav .close-aside {
  position: absolute;
  top: 7px;
  right: 7px;
  cursor: pointer;
  color: #EEE;
}
.side-nav .heading {
  background-color: #252636;
  padding: 15px 15px 15px 30px;
  overflow: hidden;
  border-bottom: 1px solid #2a2b3c
}
.side-nav .heading > img {
  border-radius: 50%;
  float: left;
  width: 28%;
}
.side-nav .info {
  float: left;
  width: 69%;
  margin-left: 3%;
}
.side-nav .heading .info > h3 {margin: 0 0 5px}
.side-nav .heading .info > h3 > a {
  color: #EEE;
  font-weight: 100;
  margin-top: 4px;
  display: block;
  text-decoration: none;
  font-size: 18px;
}
.side-nav .heading .info > h3 > a:hover {
  color: #FFF;
}
.side-nav .heading .info > p {
  color: #BBB;
  font-size: 13px;
}
/* End heading */
/* Start search */
.side-nav .search {
  text-align: center;
  padding: 15px 30px;
  margin: 15px 0;
  position: relative;
}
.side-nav .search > input {
  width: 100%;
  background-color: transparent;
  border: none;
  border-bottom: 1px solid #23262d;
  padding: 7px 0 7px;
  color: #DDD
}
.side-nav .search > input ~ i {
  position: absolute;
  top: 22px;
  right: 40px;
  display: block;
  color: #2b2f3a;
  font-size: 19px;
}
/* End search */

.side-nav .categories > li {
  padding: 17px 40px 17px 30px;
  overflow: hidden;
  border-bottom: 1px solid rgba(255, 255, 255, 0.02);
  cursor: pointer;
}
.side-nav .categories > li > a {
  color: #AAA;
  text-decoration: none;
}
/* Start num: there are three options primary, danger and success like Bootstrap */
.side-nav .categories > li > a > .num {
  line-height: 0;
  border-radius: 3px;
  font-size: 14px;
  color: #FFF;
  padding: 0px 5px
}
.dang {background-color: #f35959}
.prim {background-color: #0275d8}
.succ {background-color: #5cb85c}
/* End num */
.side-nav .categories > li > a:hover {
  color: #FFF
}
.side-nav .categories > li > i {
  font-size: 18px;
  margin-right: 5px
}
.side-nav .categories > li > a:after {
  content: "\f053";
  font-family: fontAwesome;
  font-size: 11px;
  line-height: 1.8;
  float: right;
  color: #AAA;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.side-nav .categories .opend > a:after {
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
/* End categories */
/* Start dropdown menu */
.side-nav .categories .side-nav-dropdown {
  padding-top: 10px;
  padding-left: 30px;
  list-style: none;
  display: none;
}
.side-nav .categories .side-nav-dropdown > li > a {
  color: #AAA;
  text-decoration: none;
  padding: 7px 0;
  display: block;
}
.side-nav .categories p {
  margin-left: 30px;
  color: #535465;
  margin-top: 10px;
}

/* End dropdown menu */

.show-side-nav {
  -webkit-transform: translateX(-290px);
  -moz-transform: translateX(-290px);
  transform: translateX(-290px);
}


/* Start media query */
@media (max-width: 767px) {
  .side-nav .categories > li {
    padding-top: 12px;
    padding-bottom: 12px;
  }
  .side-nav .search {
    padding: 10px 0 10px 30px
  }
}

/* End side navigation bar  */
/* Start welcome */

.welcome {
  color: #CCC;
}
.welcome .content {
  background-color: #313348;
  padding: 15px;
  margin-top: 25px;
}
.welcome h2 {
  font-family: Calibri;
  font-weight: 100;
  margin-top: 0
}
.welcome p {
  color: #999;
}

</style>
<script>
/*global $, console*/
/*
  By Mostafa Omar
	https://www.facebook.com/MostafaOmarIbrahiem
*/
$(function () {

'use strict';

(function () {

  var aside = $('.side-nav'),

      showAsideBtn = $('.show-side-btn'),

      contents = $('#contents');

  showAsideBtn.on("click", function () {

    $("#" + $(this).data('show')).toggleClass('show-side-nav');

    contents.toggleClass('margin');

  });

  if ($(window).width() <= 767) {

    aside.addClass('show-side-nav');

  }
  $(window).on('resize', function () {

    if ($(window).width() > 767) {

      aside.removeClass('show-side-nav');

    }

  });

  // dropdown menu in the side nav
  var slideNavDropdown = $('.side-nav-dropdown');

  $('.side-nav .categories li').on('click', function () {

    $(this).toggleClass('opend').siblings().removeClass('opend');

    if ($(this).hasClass('opend')) {

      $(this).find('.side-nav-dropdown').slideToggle('fast');

      $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

    } else {

      $(this).find('.side-nav-dropdown').slideUp('fast');

    }

  });

  $('.side-nav .close-aside').on('click', function () {

    $('#' + $(this).data('close')).addClass('show-side-nav');

    contents.removeClass('margin');

  });

}());

// Start chart

var chart = document.getElementById('myChart');
Chart.defaults.global.animation.duration = 2000; // Animation duration
Chart.defaults.global.title.display = false; // Remove title
Chart.defaults.global.title.text = "Chart"; // Title
Chart.defaults.global.title.position = 'bottom'; // Title position
Chart.defaults.global.defaultFontColor = '#999'; // Font color
Chart.defaults.global.defaultFontSize = 10; // Font size for every label

// Chart.defaults.global.tooltips.backgroundColor = '#FFF'; // Tooltips background color
Chart.defaults.global.tooltips.borderColor = 'white'; // Tooltips border color
Chart.defaults.global.legend.labels.padding = 0;
Chart.defaults.scale.ticks.beginAtZero = true;
Chart.defaults.scale.gridLines.zeroLineColor = 'rgba(255, 255, 255, 0.1)';
Chart.defaults.scale.gridLines.color = 'rgba(255, 255, 255, 0.02)';

Chart.defaults.global.legend.display = false;

var myChart = new Chart(chart, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", 'Jul'],
    datasets: [{
      label: "Lost",
      fill: false,
      lineTension: 0,
      data: [45, 25, 40, 20, 45, 20],
      pointBorderColor: "#4bc0c0",
      borderColor: '#4bc0c0',
      borderWidth: 2,
      showLine: true,
    }, {
      label: "Succes",
      fill: false,
      lineTension: 0,
      startAngle: 2,
      data: [20, 40, 20, 45, 25, 60],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#ff6384",
      borderColor: '#ff6384',
      borderWidth: 2,
      showLine: true,
    }]
  },
});
//  Chart ( 2 )


var Chart2 = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(Chart2, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", 'test', 'test', 'test', 'test'],
    datasets: [{
      label: "My First dataset",
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 79, 116)',
      borderWidth: 2,
      pointBorderColor: false,
      data: [5, 10, 5, 8, 20, 30, 20, 10],
      fill: false,
      lineTension: .4,
    }, {
      label: "Month",
      fill: false,
      lineTension: .4,
      startAngle: 2,
      data: [20, 14, 20, 25, 10, 15, 25, 10],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#4bc0c0",
      borderColor: '#4bc0c0',
      borderWidth: 2,
      showLine: true,
    }, {
      label: "Month",
      fill: false,
      lineTension: .4,
      startAngle: 2,
      data: [40, 20, 5, 10, 30, 15, 15, 10],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#ffcd56",
      borderColor: '#ffcd56',
      borderWidth: 2,
      showLine: true,
    }]
  },

  // Configuration options
  options: {
    title: {
      display: false
    }
  }
});


console.log(Chart.defaults.global);

var chart = document.getElementById('chart3');
var myChart = new Chart(chart, {
  type: 'line',
  data: {
    labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
    datasets: [{
      label: "Lost",
      fill: false,
      lineTension: .5,
      pointBorderColor: "transparent",
      pointColor: "white",
      borderColor: '#d9534f',
      borderWidth: 0,
      showLine: true,
      data: [0, 40, 10, 30, 10, 20, 15, 20],
      pointBackgroundColor: 'transparent',
    },{
      label: "Lost",
      fill: false,
      lineTension: .5,
      pointColor: "white",
      borderColor: '#5cb85c',
      borderWidth: 0,
      showLine: true,
      data: [40, 0, 20, 10, 25, 15, 30, 0],
      pointBackgroundColor: 'transparent',
    },
               {
                 label: "Lost",
                 fill: false,
                 lineTension: .5,
                 pointColor: "white",
                 borderColor: '#f0ad4e',
                 borderWidth: 0,
                 showLine: true,
                 data: [10, 40, 20, 5, 35, 15, 35, 0],
                 pointBackgroundColor: 'transparent',
               },
               {
                 label: "Lost",
                 fill: false,
                 lineTension: .5,
                 pointColor: "white",
                 borderColor: '#337ab7',
                 borderWidth: 0,
                 showLine: true,
                 data: [0, 30, 10, 25, 10, 40, 20, 0],
                 pointBackgroundColor: 'transparent',
               }]
  },
});

});
</script>
@endsection