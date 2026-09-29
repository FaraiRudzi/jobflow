<?php
require_once 'config.php';
$svc = [
 'slug'=>'it_services','name'=>'IT Services & Support',
 'title'=>'IT Support & Software Development Outsourcing | JobFlow',
 'desc'=>'Outsource help desk, network management, software development and IT support to expert African teams. Improve security and efficiency with JobFlow.',
 'h1'=>'Information Technology Services',
 'lead'=>'Optimize your productivity by leveraging the expertise of our IT professionals. Focus on strategic business priorities while we manage essential tasks.',
 'groups'=>[['title'=>'Our core IT services','intro'=>'From development to support, we provide the technical expertise you need to thrive.','items'=>[
   ['gears','Software Development & Maintenance','Designing, developing, and maintaining bespoke software applications to meet your business objectives.'],
   ['network-wired','Network Management','Overseeing and maintaining computer networks to ensure optimal uptime, security, and connectivity.'],
   ['headset','Help Desk Services','Offering expert support to end-users for IT-related issues via phone, email, or ticketing systems.'],
   ['server','IT Support System',"Providing technical assistance and support for your organization's entire IT infrastructure."],
   ['code','Programming & Coding','Creating custom code for specific applications, tools, or software to meet unique business needs.']]]],
 'benefits'=>['title'=>'The benefits of our IT services','type'=>'icon','items'=>[
   ['Enhanced Efficiency','Streamlined IT operations enable your business to focus on core goals without technical distractions.','chart-line'],
   ['Improved Security','Managed networks and expert IT support help protect your valuable data against threats and minimize costly downtime.','shield-halved'],
   ['Custom Solutions','Our programming and software development services provide tailored tools for your specific business needs.','screwdriver-wrench']]],
 'faqs'=>[
  ['What IT services can I outsource to JobFlow?','We provide software development and maintenance, network management, help desk services, IT infrastructure support, and custom programming.'],
  ['Can you provide a help desk for my staff or customers?','Yes. Our help desk team supports end-users by phone, email or ticketing systems.'],
  ['How does outsourced IT improve security?','Managed networks and expert support help protect your data against threats and reduce costly downtime.']],
 'ext'=>[['NIST Cybersecurity','nist.gov','Trusted frameworks for managing cybersecurity risk.','https://www.nist.gov/cybersecurity'],['CISA','cisa.gov','US guidance on protecting networks and data.','https://www.cisa.gov']],
 'cta'=>['Ready to enhance your IT infrastructure?','Contact us for a free consultation and learn how our expert IT services can drive your business forward.']];
require 'includes/service_page.php';
