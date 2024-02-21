<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

	<a href="{{route('home')}}" class="logo">
		<span class="logo-lg">{{ Session::get('business.name') }}</span>
	</a>

    <!-- Sidebar Menu -->
    {!! Menu::render('admin-sidebar-menu', 'adminltecustom'); !!}

    <!-- /.sidebar-menu -->
  </section>
  

  <br>
  <div class="text-center">
  <a href="tel:+20108 097 8482">
    <p><i class="fa fas fa-phone"></i> للدعم الفنى: </p>
    <p style="direction: ltr;">+20108 097 8482</p>
     </a> 



<h1>
  <style>
    /* body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    } */

    .whatsapp-link {
      display: inline-block;
      padding: 10px;
      text-decoration: none;
      font-size: 16px;
      background-color: #25D366;
      color: #fff;
      border-radius: 5px;
      margin-top: 20px;
    }
  </style>
 
<a href="https://wa.me/+201080978482/?text=نحن هنا لمساعدتك. إذا كان لديك أي استفسارات أو مشكلات، فلا تتردد في الاتصال بنا عبر واتساب مرحبًا بك في دعم فني Systemic!" target="_blank" rel="noopener noreferrer">
   <i class="fab fa-whatsapp"></i> 
</a>

</h1>
    <br>
    <a href="https://systemic.website">
    <p>جميع الحقوق محفوظة ل</p>
    <img src="{{asset('images/1e.PNG')}}" width="140" alt="">
    </a>
  </div>
  <!-- /.sidebar -->
</aside>
