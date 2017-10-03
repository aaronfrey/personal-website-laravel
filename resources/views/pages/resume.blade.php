@extends('layouts.default')

@section('title', 'Resume')

@section('content')

  <div class="resume-container">

    <h2>Skills</h2>
    <hr>
    <p class="skills">PHP, JavaScript, jQuery, Wordpress, SQL, HTML5, CSS3, SASS, LESS, Angular, Laravel, Gulp, Grunt, Composer, Photoshop.</p>

  	<h2>Experience</h2>
  	<hr>

    <div class="info-section clearfix">
    	<p>Full Stack Developer | <strong>Pepper Lillie</strong> | Philadelphia, Pennsylvania<br>May 2015 - Present</p>
  		<ul>
        <li><p>Develops responsive, mobile-friendly themes and plugins for industry leading Content Management Systems, including Wordpress and Drupal.</p></li>
        <li><p>Works closely with designers to establish a web-friendly and sensible product.</p></li> 
      </ul>
    </div>

    <div class="info-section clearfix">
      <p>Senior Developer | <strong>SuperMighty (formerly Faculty Creative)</strong> | Philadelphia, Pennsylvania<br>April 2010 - May 2015</p>
      <ul>
        <li><p>Wrote APIs for multiple acclaimed applications, including award winning BizVizz.</p></li>
        <li><p>Established development protocols and coding standards, reviewing all code to ensure compliance.</p></li>
        <li><p>Introduced test-driven development techniques to the organization, greatly reducing bugs and overall project time.</p></li>  
      </ul>
    </div>

    <div class="info-section clearfix">
      <p>Build Manager | <strong>Oracle (acquired AdminServer in May 2008)</strong> | Chester, Pennsylvania<br>January 2006 - August 2009</p>
      <ul>
        <li><p>Managed a quickly evolving codebase and provided stable client releases  consisting of high-level insurance policy administration software.</p></li>
        <li><p>Wrote complex database queries to automate critical processes for multibillion-dollar corporation ING.</p></li>
        <li><p>Created a Graphic User Interface allowing clients to quickly create dynamic insurance products based on existing business logic.</p></li>  
      </ul>
    </div>

    <h2>Education</h2>
    <hr>

    <p><strong>West Chester University,</strong> West Chester, Pennsylvania<br>BS: Computer Science, Graduated December 2006</p>
    <p>Focused on advanced Computer Science topics including Object Oriented Programming, Data Structures, and Network Security. Received full marks interning at AdminServer, one of the fastest growing tech companies in the Philadelphia area.</p>

    <h2>Awards</h2>
    <hr>

    <p><strong>Philadelphia Geek Awards</strong> - 2013 - Mobile App of the Year - BizVizz</p>

  </div>

@endsection