<%-- 
    Document   : index
    Created on : Feb 3, 2010, 9:09:39 PM
    Author     : vivek.b
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <script type="text/javascript" src="resources/anaa/anaa.js"></script>
        <script type="text/javascript">
	function storing(data, element)
	{
		element.innerHTML = data;
	}
	function demo(element)
	{
		AARead("resources/anaa/demo-get.txt", storing, element);

	}
</script>

<p> <span id="storage"> ***Must be stored here***. </span> </p>

    </body>
</html>
