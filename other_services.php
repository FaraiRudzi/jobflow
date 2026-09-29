<?php
require_once 'config.php';
$svc = [
 'slug'=>'other_services','name'=>'Virtual Assistance, Marketing & Fleet Services',
 'title'=>'Virtual Assistants, Marketing & Fleet Services | JobFlow',
 'desc'=>'JobFlow offers virtual assistant, digital marketing and 24/7 fleet management outsourcing tailored to your industry. Talk to us for a free consultation.',
 'h1'=>'Other Specialized Services',
 'lead'=>'In addition to our core offerings, we provide a suite of specialized services to meet the unique needs of various industries.',
 'groups'=>[
  ['title'=>'Marketing services','intro'=>'Our marketing services help businesses enhance their brand and reach new customers with targeted campaigns.','items'=>[
   ['bullhorn','Digital Marketing',"Implementing effective online strategies to boost your brand's presence and generate leads."],
   ['chart-line','Campaign Management','Overseeing marketing campaigns from concept to execution, tracking, and analysis.'],
   ['tag','Brand Promotion','Crafting and executing strategies to promote your brand and increase market awareness.']]],
  ['title'=>'Fleet management services','intro'=>"Comprehensive services to improve efficiency, safety, and cost control for your business's vehicle fleet.",'items'=>[
   ['map-location-dot','24/7 Fleet Tracking','Real-time monitoring of vehicles for location, status, and performance.'],
   ['road','Route Management','Optimizing routes to improve efficiency and reduce fuel consumption.'],
   ['handshake-angle','Driver Support','Providing drivers with 24/7 assistance for issues like breakdowns and accidents.'],
   ['dolly','Transportation Logistics','Managing vehicle leasing, hiring, or outsourcing to meet business demands.']]],
  ['title'=>'Virtual assistance','intro'=>'Our virtual support services provide administrative, technical, and creative support to help you focus on your core business.','items'=>[
   ['list-check','Administrative Support','Handling day-to-day administrative tasks to improve your efficiency.'],
   ['laptop','Technical Support','Providing technical assistance and troubleshooting for your business.'],
   ['paintbrush','Creative Support','Offering support for creative projects, presentations, and content creation.']]]],
 'faqs'=>[
  ['What is a virtual assistant and how can it help my business?','A virtual assistant is a remote professional who handles administrative, technical or creative tasks, freeing you to focus on your core business.'],
  ['Does JobFlow offer digital marketing support?','Yes. We provide digital marketing, campaign management from concept to analysis, and brand promotion.'],
  ['What does your fleet management service include?','24/7 fleet tracking, route management, round-the-clock driver support, and transportation logistics such as vehicle leasing and hiring.']],
 'ext'=>[['Google Search Central','developers.google.com','Official guidance on search visibility and digital marketing basics.','https://developers.google.com/search'],['SADC','sadc.int','Southern African Development Community: regional trade and transport.','https://www.sadc.int']],
 'cta'=>['Have a specialized need?',"Let's discuss how our diverse service offerings can be tailored to solve your unique business challenges."]];
require 'includes/service_page.php';
