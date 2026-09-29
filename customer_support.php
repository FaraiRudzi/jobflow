<?php
require_once 'config.php';
$svc = [
 'slug'=>'customer_support','name'=>'Customer Support Outsourcing',
 'title'=>'Customer Support Outsourcing | JobFlow Zimbabwe',
 'desc'=>'Outsource omnichannel customer support, live chat and ticketing to trained African agents. Improve satisfaction and loyalty with JobFlow. Free consultation.',
 'h1'=>'Customer Support Services',
 'lead'=>'Our services are designed to help businesses provide exceptional customer experiences, increasing loyalty and enhancing brand reputation.',
 'groups'=>[['title'=>'Our support solutions','intro'=>'We provide a full range of services to ensure your customers are always heard and helped.','items'=>[
   ['comment-dots','Omnichannel Service','Providing timely and efficient support via phone, email, and chat.'],
   ['ticket','Ticketing System','Managing inquiries efficiently with automated ticket creation and prioritization.'],
   ['comments','Social & Live Chat','Offering real-time support across all your channels, including social media and live chat.']]]],
 'benefits'=>['title'=>'The benefits of outsourced support','type'=>'img','items'=>[
   ['Exceptional Experiences','We ensure your customers receive the best possible experience with every interaction, leading to higher satisfaction scores, positive reviews, and a stronger connection to your brand.','images/experience.jpg','Customer having an exceptional experience'],
   ['Increased Loyalty','Fast, effective, and personalized support is key to building trust. We help you build strong relationships that turn one-time buyers into loyal, repeat customers who advocate for your business.','images/loyalty.jpg','Customer showing loyalty to a brand'],
   ['Enhanced Reputation','In a crowded market, superior customer service is a powerful differentiator. By providing reliable and timely assistance, you build a strong brand reputation and stand out from the competition.','images/reputation.jpg','Brand with a five-star reputation']]],
 'faqs'=>[
  ['What is customer support outsourcing?','It means having a dedicated external team handle your customer inquiries across phone, email, chat and social media, so customers get fast, consistent help.'],
  ['Which support channels does JobFlow cover?','We support phone, email, live chat and social media, and manage inquiries with automated ticket creation and prioritization.'],
  ['How does outsourced support improve loyalty?','Fast, personalized responses build trust, which turns one-time buyers into repeat customers and improves your brand reputation.']],
 'ext'=>[['HDI','thinkhdi.com','Professional association for service and support excellence.','https://www.thinkhdi.com'],['ISO','iso.org','International standards, including customer contact centre quality.','https://www.iso.org']],
 'cta'=>['Ready to elevate your customer support?',"Let's connect. Get a free, no-obligation consultation to discover how we can improve your customer satisfaction and loyalty."]];
require 'includes/service_page.php';
