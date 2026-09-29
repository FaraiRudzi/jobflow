<?php
require_once 'config.php';
$svc = [
 'slug'=>'talent_acquisition','name'=>'Talent Acquisition & Recruitment',
 'title'=>'Talent Acquisition & Recruitment Outsourcing | JobFlow',
 'desc'=>"Find the right talent with JobFlow's permanent recruitment, temporary staffing, executive search and recruitment outsourcing services. Free consultation.",
 'h1'=>'Find the Right Talent to Drive Your Success',
 'lead'=>'Our expert Talent Acquisition service provides comprehensive recruitment and staffing solutions, helping you build a stronger team and a more successful business.',
 'groups'=>[
  ['items'=>[
   ['users-gear','Access Top Talent','Tap into our vast network of qualified candidates to access the best professionals in your industry.'],
   ['rocket','Streamlined Process','Our efficient recruitment process saves you valuable time and resources, allowing you to focus on your core business.'],
   ['dollar-sign','Cost-Effective Solutions','We provide tailored and affordable talent acquisition services that deliver exceptional value and meet your business needs.']]],
  ['title'=>'Our recruitment services','items'=>[
   ['user-tie','Permanent Recruitment','Find the right permanent employees to build a stable and skilled team.'],
   ['clock','Temporary Staffing','Flexible staffing solutions for short-term projects or temporary needs.'],
   ['briefcase','Executive Search','Specialized recruiting for senior-level and key leadership positions.'],
   ['gears','Recruitment Outsourcing','We can manage your entire recruitment process, from sourcing to onboarding.']]]],
 'process'=>['title'=>'Our talent acquisition process','intro'=>"We've designed a clear and effective process to ensure you find the perfect candidate for your team.",'steps'=>[
   ['Understanding Needs','We work closely with you to gain a deep understanding of your business, culture, and specific talent requirements.'],
   ['Sourcing Talent','We utilize a variety of channels, including job boards, social media, and professional networks, to source the best candidates.'],
   ['Screening & Shortlisting','We meticulously screen and shortlist candidates based on your requirements, presenting only the most qualified individuals.'],
   ['Conducting Interviews','We assist with conducting interviews, providing valuable insights to help you make an informed hiring decision.']]],
 'industries'=>[['Technology','images/tech.jpg'],['Healthcare','images/healthcare.jpg'],['Finance','images/finance.jpg'],['Manufacturing','images/manufacturing.webp']],
 'faqs'=>[
  ['What recruitment services does JobFlow offer?','We offer permanent recruitment, temporary staffing, executive search and full recruitment outsourcing from sourcing to onboarding.'],
  ['How does your talent acquisition process work?','We understand your needs, source candidates through job boards, social media and professional networks, screen and shortlist the best, and assist with interviews.'],
  ['Which industries do you recruit for?','We recruit for technology, healthcare, finance and manufacturing, among other industries.']],
 'ext'=>[['SHRM','shrm.org','Society for Human Resource Management: hiring best practice.','https://www.shrm.org'],['International Labour Organization','ilo.org','Global standards and research on decent employment.','https://www.ilo.org']],
 'cta'=>['Ready to build your team?',"Let's connect. Get a free, no-obligation consultation to discover how we can fulfill your talent needs."]];
require 'includes/service_page.php';
