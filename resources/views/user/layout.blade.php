<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	@include('user.header.head')
<body>
<!-- header -->
@include('user.header.header')
<!-- //header -->
@yield('content')
<!-- footer -->
@include('user.footer.footer')
<!-- //footer -->
</body>
</html>