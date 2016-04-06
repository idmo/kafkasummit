<?php 
/**
 * Template Name: Schedule
 *
 */

 ?>

<?php get_header('foo'); ?>


<div class="slide" id="schedule">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">

			<div>
			<table class="table">
					<tr>
						<td class="time">&nbsp;</td>
						<td colspan="3" class="disclaimer"><em>Times are subject to change</em></td>
					</tr>
					<tr>
						<td class="time">&nbsp;</td>
						<td colspan="3"><div class="break">Check-in 7:30 AM - 5:00 PM</div></td>
					</tr>
					<tr>
						<td class="time">&nbsp;</td>
						<td colspan="3"><div class="break">Community Room / Exhibit Hall 7:30 AM - 3:30 PM</div></td>
					</tr>
					<tr>
						<td class="time">7:30 AM - 9:00 AM</td>
						<td colspan="3"><div class="break">Breakfast</div></td>
					</tr>
					<tr>
						<td class="time">9:00 AM - 10:15 AM</td>
						<td colspan="3" id="general-session"><strong>General Session</strong></td>
					</tr>
					<tr>
						<td class="time">10:15 AM - 10:30 AM</td>
						<td colspan="3"><div class="break">Break</div></td>
					</tr>
					<tr class="tracks">
						<th>&nbsp;</th>
						<th>Systems Track<br><span class="room">Grand A Ballroom</span></th>
						<th>Operations Track<br><span class="room">Imperial A Ballroom</span></th>
						<th>Users Track<br><span class="room">Imperial B Ballroom</span></th>
					</tr>
					<tr>
						<td class="time">10:30 AM - 11:10 AM</td>
						<td><span class="session"><a href=" http://kafka-summit.org/sessions/fundamentals-of-stream-processing/ ">Fundamentals of Stream Processing with Apache Beam</a></span><br>Google, <a href="http://kafka-summit.org/speakers/frances-perry/" class="speaker">Frances Perry</a> &amp; <a href="http://kafka-summit.org/speakers/tyler-akidau/" class="speaker">Tyler Akidau</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/real-time-data-cloud-scale/">Kafka at Scale in Cloud</a></span><br>Netflix, <a href="http://kafka-summit.org/speakers/allen-wang/" class="speaker">Allen Wang</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/stream-processing-with-kafka-in-uber/">Stream Processing with Kafka in Uber</a></span><br>Uber, <a href="http://kafka-summit.org/speakers/danny-yuan/" class="speaker">Danny Yuan</a></td>
					</tr>
					<tr>
						<td class="time">11:20 AM - 12:00 PM</td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/advanced-streaming-analytics-with-apache-flink-and-apache-kafka/">Advanced Streaming Analytics with Apache Flink and Apache Kafka</a></span><br> Data Artisans, <a href="http://kafka-summit.org/speakers/stephan-ewen/" class="speaker">Stephan Ewen</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/when-it-absolutely-positively-has-to-be-there-reliability-guarantees-in-kafka/" class="session">When it Absolutely, Positively, Has to be There: Reliability Guarantees in Kafka</a></span><br>Confluent, <a href="http://kafka-summit.org/speakers/gwen-shapira/" class="speaker">Gwen Shapira</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/siphon-near-real-time-databus-using-kafka/">Siphon - Near Real Time Databus Using Kafka</a></span><br>Microsoft, <a href="http://kafka-summit.org/speakers/nitin-kumar/" class="speaker">Nitin Kumar</a> &amp; <a href="http://kafka-summit.org/speakers/eric-boyd/" class="speaker">Eric Boyd</a></td>
					</tr>					
					<tr>
						<td class="time">12:10 PM - 12:50 PM</td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/introducing-kafka-streams-large-scale-stream-processing-with-kafka/">Introducing Kafka Streams: Large-scale Stream Processing with Kafka</a></span><br>Confluent, <a href="http://kafka-summit.org/speakers/neha-narkhede/" class="speaker">Neha Narkhede</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/some-kafkaesque-days-in-operations-at-linkedin-in-2015/">Some “Kafkaesque” Days in Operations at Linkedin in 2015</a></span><br>LinkedIn, <a href="http://kafka-summit.org/speakers/joel-koshy/" class="speaker">Joel Koshy</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/the-enterprise-service-bus-is-dead-long-live-the-enterprise-service-bus/" class="session">The Enterprise Service Bus is Dead! Long live the Enterprise Service Bus</a></span><br>Heroku, <a href="http://kafka-summit.org/speakers/rimas-silkaitis/" class="speaker">Rimas Silkaitis</a></td>
					</tr>
					<tr>
						<td class="time">12:50 PM - 1:50 PM</td>
						<td colspan="3"><div class="break">Lunch</div></td>
					</tr>
					<tr>
						<td class="time">1:50 PM - 2:30 PM</td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/kafka-connect-real-time-data-integration-at-scale-with-apache-kafka/">Kafka Connect: Real-time Data Integration at Scale with Apache Kafka</a></span><br>Confluent, <a href="http://kafka-summit.org/speakers/ewen-cheslack-postava/" class="speaker">Ewen Cheslack-Postava</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/securing-kafka/">Securing Kafka</a></span><br>Confluent,  <a href="http://kafka-summit.org/speakers/jun-rao/" class="speaker">Jun Rao</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/espresso-database-replication-with-kafka/">Espresso Database Replication with Kafka</a></span><br>LinkedIn, <a href="http://kafka-summit.org/speakers/tom-quiggle/" class="speaker">Tom Quiggle</a></td>
					</tr>					
					<tr>
						<td class="time">2:40 PM - 3:20 PM</td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/conquering-all-your-stream-processing-needs-with-kafka-and-spark/">Conquering all your stream processing needs with Kafka and Spark</a></span><br>Databricks, <a href="http://kafka-summit.org/speakers/tathagata-das/" class="speaker">Tathagata Das</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/more-datacenters-more-problems/">More Datacenters, More Problems</a></span><br>LinkedIn, <a href="http://kafka-summit.org/speakers/todd-palino/" class="speaker">Todd Palino</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/leveraging-kafka-for-big-data-in-real-time-bidding-analytics-machine-learning-and-campaign-management-for-globally-distributed-data-flows/">Leveraging Kafka for Big Data in Real Time Bidding, Analytics, Machine Learning and Campaign Management for Globally Distributed Data Flows</a></span><br>Tuplejump, <a href="http://kafka-summit.org/speakers/helena-edelson/" class="speaker">Helena Edelson</a></td>
					</tr>
					<tr>
						<td class="time">3:20 PM - 3:40 PM</td>
						<td colspan="3"><div class="break">Break</div></td>
					</tr>					
					<tr>
						<td class="time">3:40 PM - 4:20 PM</td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/simplifying-event-streaming-tools-for-location-transparency-and-data-evolution/">Simplifying Event Streaming: Tools for Location Transparency and Data Evolution</a></span><br>Under Armour, <a href="http://kafka-summit.org/speakers/paul-osman/" class="speaker">Paul Osman</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/building-an-event-oriented-data-platform-with-kafka/">Building an Event-oriented Data Platform with Kafka</a></span><br>Rocana, <a href="http://kafka-summit.org/speakers/eric-sammer/" class="speaker">Eric Sammer</a></td>
						<td><span class="session">Lightning Sessions</span><br>		
						<p><span class="session"><a href="Towards A Stream Centered Enterprise">Towards A Stream Centered Enterprise</a></span> Comcast, <a href="http://kafka-summit.org/speakers/gabriel-commeau/" class="speaker">Gabriel Commeau</a></p>
						<p><span class="session"><a href="http://kafka-summit.org/sessions/kafka-the-dialtone-for-data-building-a-self-service-scalable-streaming-analytics-system-homeaway/">Kafka, the "DialTone for Data": Building a self-service, scalable, streaming analytics system @ HomeAway</span></a> Homeaway, <a href="http://kafka-summit.org/speakers/rene-parra/" class="speaker">Rene Parra</a></p>
						<p><span class="session"><a href="http://kafka-summit.org/sessions/kafka-killer-of-point-to-point-integrations/">Kafka, Killer of Point-to-Point Integrations</a></span> Intuit, <a href="http://kafka-summit.org/speakers/lucian-lita/" class="speaker">Lucian Lita</a></p>
						</td>
					</tr>
					<tr>
						<td class="time">4:30 PM - 5:10 PM</td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/streaming-sql-2/">Streaming SQL</a></span><br>Hortonworks, <a href="http://kafka-summit.org/speakers/julian-hyde-2/" class="speaker">Julian Hyde</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/deploying-kafka-at-dropbox/">Deploying Kafka at Dropbox</a></span><br>Dropbox, <a href="http://kafka-summit.org/speakers/mark-smith/" class="speaker">Mark Smith</a> &amp; <a href="http://kafka-summit.org/speakers/sean-fellows/" class="speaker">Sean Fellows</a></td>
						<td><span class="session">Lightning Sessions</span>
						<p><span class="session"><a href="http://kafka-summit.org/sessions/ingesting-complex-healthcare-data-with-apache-kafka/">Ingesting Complex Healthcare Data with Apache Kafka</a></span> Cerner, <a href="http://kafka-summit.org/speakers/micah-whitacre/" class="speaker">Micah Whitacre</a></p>
						<p><span class="session"><a href="http://kafka-summit.org/sessions/kafka-and-stream-processing-taking-analytics-real-time/">Kafka and Stream processing, Taking Analytics Real-time</a></span>IBM <a href="http://kafka-summit.org/speakers/mike-spicer/" class="speaker">Mike Spicer</a></p>
						<p><span class="session"><a href="http://kafka-summit.org/sessions/never-at-rest-iot-and-data-streaming-at-british-gas-connected-homes/">Never at Rest - IoT and Data Streaming at British Gas Connected Homes</a></span><br>Connected Homes,  <a href="http://kafka-summit.org/speakers/paul-makkar/" class="speaker">Paul Makkar</a></p>
						</td>
					</tr>
					<tr>
						<td class="time">5:20 PM - 6:00 PM</td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/generating-real-time-recommendations-with-nifi-kafka-and-spark/">Generating Real-time Recommendations with NiFi, Kafka, and Spark</a></span><br>IBM, <a href="http://kafka-summit.org/speakers/chris-fregly/" class="speaker">Chris Fregly</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/101-ways-to-configure-kafka-badly/">101 Ways to Configure Kafka - Badly</a></span><br>Finn.no, <a href="http://kafka-summit.org/speakers/henning-spjelkavik/" class="speaker">Henning Spjelkavik</a> &amp; <a href="http://kafka-summit.org/speakers/audun-fauchald-strand/" class="speaker">Audun Strand</a></td>
						<td><span class="session"><a href="http://kafka-summit.org/sessions/real-time-analytics-visualized-w-kafka-streamliner-memsql-zoomdata/">Real-Time Analytics Visualized w/ Kafka + Streamliner + MemSQL + ZoomData</a></span><br>Goldman Sachs, <a href="http://kafka-summit.org/speakers/anton-gorshkov/" class="speaker">Anton Gorshkov</a></td>
					</tr>
					<tr>
						<td class="time">6:00 PM - 9:00 PM</td>
						<td colspan="3"><div class="break">Kafka-Palooza Party</div></td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer( ); ?>