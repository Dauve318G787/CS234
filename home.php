<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="stylesheet.css"></link>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"></link>
    
    </p>

    <div class="header">
    <h1 style="text-align: center; border-bottom: 6px solid #660000;"> Start Here! </h1>
    
        <br>
        <h1 style="text-align: center">Before you fly, consider these items.</h1>
        <h3> Current Weather (METAR) </h3>
    
        <p id="METAR"> </p>
        
        
        <div class="w3-card w3-containermetar_explain">
            <p>A typical METAR is formatted like this:</p>
            <p>KMDH 152052Z 36005KT 10SM FEW043 31/22 A2992 RMK (other stuff)</p>
            <p><p class="w3-text-red"> KMDH </p> is the airport this METAR is being reported at.</p>
            <p><p class="w3-text-red"> 15 </p> represents the day of the month the METAR was issued on (in this case, the 15th of the month), and 2052Z represents the Zulu time 
                at which the METAR was issued (in this case, 20:52 hours or 8:52 PM).
            </p>
            <p> <p class="w3-text-red"> 36005KT </p> represents the wind direction and speed. In this case, the winds are out of a heading of 360,
                and the wind speed is 5 knots. If the wind speed is below 10 knots, the speed will include a leading zero (hence, 05 equals 5). If there are gusts reported,
                the gust speed will be included on the METAR, prefixed by the capital letter G. For example, 36005G15KT means the winds are out of a heading of 360
                degrees, the wind speed is 5 knots, and the gust speed is 15 knots.
            </p>
            <p> <p class="w3-text-red"> 10SM </p> represents the visibility. In this case, the visibility is 10 statute miles.</p>
            <p> <p class="w3-text-red"> FEW043 </p> represents the cloud cover. In this case, there are few clouds at 4,300 feet above ground level.</p>
            <p> <p class="w3-text-red"> 31/22 </p> represents the temperature/dewpoint in Celsius (respectively).</p>
            <p> <p class="w3-text-red"> A2992 </p> represents the altimeter setting. In this case, the altimeter setting is 29.92.</p>
            <p> <p class="w3-text-red"> RMK </p> and anything after it represents additional remarks.</p>

        </div>
        
        <h2 class="section_start"> Required Documents </h2>
        <h3>Per FAR 61.3, you are required to carry certain documents with you to act as pilot in command. These documents are: </h3>
        <ul>
            <strong><li>Your pilot certificate</li></strong>
            <strong><li>A photo ID</li></strong>
            <p>Valid forms of identification include a driver's license, state ID, passport, or military ID. 
                Your SIU student ID is NOT a valid form of identification. For more information, refer to FAR 61.3.
            </p>
            <strong><li>A valid medical certificate.</li></strong>
            <p>If you are under the age of 40, all three medical certificates are valid for flight training purposes for 60 calendar months.</p>
            <strong><li>A valid solo logbook endorsement (if operating as a solo student pilot).</li></strong>
        </ul>
        <h2 class="section_start">Required Preflight Action</h2>
        <h3>Per FAR 91.103, you are required to gather certain information prior to departing on a flight. These items include:</h3>
        <ul>
            <li>Weather reports and forecasts</li>
            <li>Fuel requirements</li>
            <li>Alternate airports</li>
            <li>Runway length at airports of intended use</li>
            <li>Aircraft performance under suspected conditions at arrival airport</li>
        </ul>
        <h2 class="section_start"> IMSAFE </h2>
        <h3>This checklist allows you to take a granular look at your current wellbeing and fitness to fly.</h3>
        <strong class="w3-text-green"><p> Illness: </strong> Are you sick? </p>
        <strong class="w3-text-purple"><p> Medication: </strong> Are you taking medication that impairs your ability to flying?</p>
        <strong class="w3-text-red"><p> Stress: </strong> Are you stressed to a degree that will interfere with your ability to fly? </p>
        <strong class="w3-text-brown"><p> Alcohol: </strong> Have you had a drink within the past 8 hours? Do you feel hung over?</p>
        <strong class="w3-text-teal"><p> Fatigue:</strong> Are you tired to the point where you can't fly safely? </p>
        <strong><p> Emotion:</strong> Is it just not your day? </p>
        <p>If ANY of these are true for you, <strong class="w3-text-red"> DO NOT FLY!! </strong> </p>

        <h2 class="section_start"> PAVE </h2>
        <h3>The <strong class="w3-text-red"> PAVE </strong> checklist is a great way to assess the risks of a flight</h3>
        <strong><p> Pilot: </strong> This is the "you factor." Are you fit to fly? Are you comfortable with the conditions? Are you rated for the aircraft you're flying? </p>
        <strong><p> Aircraft: </strong> This focuses on the aircraft you will be flying. Is it airworthy? Will it work for your mission? </p>
        <strong><p> enVironment: </strong> This focuses on the environment you will be flying in. What is the weather like? Have you flown in this weather? Are you comfortable flying SOLO (not dual) in this weather?</p>
        <strong><p> External Pressures: </strong> This is the "everything else" factor. What's motivating you to do this flight? Why are you flying? Is anyone depending on you to make this flight? </p>
    
    <h2 class="section_start"> Weather Calls </h2>
    <p> Throughout the day, SIU Aviation Duty Officers will observe current weather conditions and make weather calls based on those observations.
    </p>
    <p> Please note that these weather calls are BY NO MEANS an end-all-be-all and it is up to the student to evaluate the weather conditions present, determine if they fall within their personal minimums,
        and make a go/no-go decision as appropriate. Just because you CAN go, doesn't mean you SHOULD go. </p>
    <table>
    <tr> 
        <th> Weather Call </th>
        <th> Abbreviation </th>
        <th> Conditions Required </th>
        <th> Remarks </th>
    </tr>
    <tr>
        <td> Unrestricted </td>
        <td class="abbrev" style="background-color: green;"><strong>U</strong></td>
        <td> Ceilings at or above 3000 feet AGL, visibility at or above 5 statute miles, winds at or below 25 knots.</td>
        <td> All types of flight, both dual and solo, are permitted regardless of flight course. Cross-country flights will be subject to the same restrictions
            as per usual, and the Duty Officer may restrict cross-country flight as they see fit, for reasons such as reduced visibility around destination airports. </td>
    </tr>
    <tr>
        <td> Dual </td>
        <td class="abbrev" style="background-color: greenyellow;"> <strong>D</strong></td>
        <td> Ceilings above 2000 feet AGL, visibity above 5 statute miles, winds below 30 knots. </td>
        <td> Dual flight of all types is permitted. Solo flight may be permitted on a case-by-case basis.</td>
    </tr>
    <tr>
        <td> Local </td>
        <td class="abbrev" style="background-color: blue;"> <strong>L</strong> </td>
        <td> Ceilings above 3000 feet AGL, visibility above 5 statute miles, winds below 25 knots. </td>
        <td> Local flights (traffic pattern and practice area) are permitted. Cross-country flights may be approved on a case-by-case basis.</td>
    </tr>
    <tr>
        <td> Dual Local </td>
        <td class="abbrev" style="background-color: teal;"> <strong>DL</strong></td>
        <td> Ceilings above 2000 feet AGL, visibility above 5 statute miles, winds below 30 knots. </td>
        <td> Local dual flights (traffic pattern and practice area) are permitted. Local solo flights may be approved on a case-by-case basis,
             cross country flights of any kind are unlikely to be approved.
        </td>
    </tr>
    <tr>
        <td> Pattern Only </td>
        <td class="abbrev" style="background-color: violet;"> <strong>PO</strong></td>
        <td> Ceilings above 1500 feet AGL, visibility above 5 statute miles, winds below 25 knots. </td>
        <td> Solo and dual flights in the traffic pattern (closed traffic) are permitted. </td>
    </tr>
    <tr>
        <td> Dual Pattern </td>
        <td class="abbrev" style="background-color: rgb(202, 88, 202);"> <strong>DP</strong> </td>
        <td> Ceilings above 1000 feet AGL, visibility above 3 statute miles, winds below 30 knots. </td>
        <td> Only dual traffic pattern flights are permitted. </td>
    </tr>
    <tr>
        <td> IFR Only </td>
        <td class="abbrev" style="background-color: gray;"> <strong>IFR</strong></td>
        <td> Ceilings above 500 feet AGL, visibility above 1 1/2 statute miles, no wind limit. </td>
        <td> Only IFR flights are permitted. </td>
    </tr>
    <tr>
        <td> No 201 Solo </td>
        <td class="abbrev" style="background-color: gray;"> <strong>No 201</strong></td>
        <td> Weather conditions that may be hazardous to student pilots, such as strong crosswinds. MOS limits 201A/B solo operations to surface winds below 15
             knots.
        </td>
        <td> Dual flights in 201A/B and dual/solo flights in all other courses are permitted. </td>
    </tr>
    <tr>
        <td> No Flight </td>
        <td class="abbrev" style="background-color: gray;"> <strong>NF</strong> </td>
        <td> Hazardous weather conditions (thunderstorms, icing, excessive winds) exist over/around KMDH. </td>
        <td> No flights of any kind are permitted. </td>
    </tr>
    </table>
    </div>
    
    <div class="enrolling">
        <h3 class="section_start">Getting Started</h3>
        <p>First and foremost, you will need to be accepted into the aviation program. More information on the admissions process can be found
            <a href="https://aviation.siu.edu/management/aas-avf/admissions.php">here.</a>
        </p>
        <p>After you are admitted to the university, your application will be placed in the aviation program's applicant pool.
            Once you are admitted to the aviation program, you may proceed to the next step.
        </p>
        <h3 class="section_start">Registering for Classes</h3>
        <p>As an aviation major, your class schedule will consist of general education requirements, a flight course, and a ground instruction course.
           To kick off the registration process, you will meet with your academic advisor. They will guide you through the registration process, draft a
           list of courses for you, and will answer any questions you may have. Once your meeting has concluded, you will receive a RUN (Registration User Number),
           which you will use to access the registration portal within SalukiNet. This is the portal in which you will register for classes.
        </p>
        <h3 class="section_start">All About Flight Blocks</h3>
        <p> Your flight courses will meet during predetermined time periods known as flight blocks. Each flight block is two hours in length and are named based on their start time.
            For example, the flight block starting at 7 AM is known as the "7 AM flight block." See the below table for specifics.
        </p>
        <table style="width: 100%">
            <tr>
                <th>Block Start Time</th>
                <th>Earliest Permissible Check-In Time</th>
                <th>Latest Permissible Ramp-Out Time</th>
            </tr>
            <tr>
                <td> 0700 </td>
                <td> Upon arrival of Duty Officer/Chief Flight Instructor </td>
                <td> 0725 </td>
            </tr>
            <tr>
                <td> 0900 </td>
                <td> 0745 </td>
                <td> 0925 </td>
            </tr>
            <tr>
                <td> 1100 </td>
                <td> 0945 </td>
                <td> 1125 </td>
            </tr>
            <tr>
                <td> 1300 </td>
                <td> 1145 </td>
                <td> 1325 </td>
            </tr>
            <tr>
                <td> 1500 </td>
                <td> 1345 </td>
                <td> 1525 </td>
            </tr>
            <tr>
                <td> 1700 </td>
                <td> 1545 </td>
                <td> 1725 </td>
            </tr>
        </table>
        <h3 class="section_start"> Night Flight </h3>
        <p> Nighttime flight sessions are conducted on select Mondays and Thursdays during the academic year. Check-in times
            for these sessions are typically
            one hour prior to sunset.
        </p>
        <h3 class="section_start"> Aircraft Fleet </h3>
        <table>
            <tr>
                <th> Aircraft Type </th>
                <th> Rental Rate </th>
                <th> Remarks </th>
            </tr>
            <tr>
                <td><img src="C152.jpg" width="300" height="169"></img></td>
                <td> $201/hr </td>
                <td> The C152 is the smallest aircraft that SIU operates and is a common choice for students entering
                     AF201A.
                </td>
            </tr>
            <tr>
                <td><img src="C172.jpg" width="300" height="169"></img></td>
                <td> $206/hr </td>
                <td> The C172 designation encompasses both the C172N and C172P aircraft at SIU. These aircraft are another
                    common
                    choice for student entering AF201A but may be used in any course prior to AF206A. They are larger and
                    more powerful than the C152
                    but have similar instrumentation. All C172s are carbureted. A $15/hour end-of-course refund will be
                    administered for students training
                    in this airplane.
                </td>
            </tr>
            <tr>
                <td><img src="C172R.jpg" width="300" height="169"></img></td>
                <td> $221/hr</td>
                <td> The C172R can be thought of as the C172, except with more modern instrumentation and a slightly more
                    powerful engine.
                    All C172Rs have fuel injected engines. These are another common decision for students in AF201A/B.
                </td>
            </tr>
            <tr>
                <td><img src="C172R_G1000.jpg" width="300" height="169"></img></td>
                <td> $221/hr </td>
                <td> The C172R G1000 is exactly the same as the C172R, with the addition of a Garmin G1000 suite of
                    avionics. These aircraft are not available to students
                    in flight courses below AF203 and students in AF206A/B must train in the C172R/S G1000.
                </td>
            </tr>
            <tr>
                <td><img src="C172S_G1000.jpg" width="300" height="169"></img></td>
                <td> $221/hr </td>
                <td> The C172S G1000 has the same instrumentation as the C172R G1000, but has a more powerful engine and slightly
                    more advanced systems. These advancements include autopilot. This aircraft is available in the same courses that the C172R
                    G1000 is, and students may swap back and forth between aircraft as they or their instructor sees fit.
                    This aircraft is a popular option for students in AF206A/B.
                </td>
            </tr>
            <tr>
                <td><img src="PA28R.jpg" width="300" height="169"></img></td>
                <td> $264/hr </td>
                <td> The PA28R is availabe to students in AF206A that need training towards a complex endorsement. It is only available
                    for certain lessons.
                </td>
            </tr>
            <tr>
                <td><img src="C310.jpg" width="300" height="169"></img></td>
                <td> $403/hr </td>
                <td> The Cessna 310 is available to students working towards a multi-engine rating in AF207B. </td>
            </tr>
        </table>
    
        <h3 class="section_start"> Required Flight Courses </h3>
        <p> To complete the Associate of Applied Science in Aviation Flight degree program, a student must complete all
            required all flight courses, culminating in them
            receiving their commercial pilot certificate with a multi-engine rating. If a student desires, they may take
            elective flight courses to complete their instructional ratings
            (CFI, CFII, MEI). <strong>Click on course names to learn more about the course.</strong>
        </p>
        <table style="width:100%">
            <tr>
                <th> Flight Course</th>
                <th> Course Description </th>
                <th> Aircraft Available </th>
            </tr>
            <tr>
                <td> <a href="af199.html">AF199</a> </td>
                <td> Private Pilot transition course. Emphasis is placed on aircraft familiarization and preparation for
                    commercial training.
                    Course must be completed in eight weeks. Students must hold a private pilot certificate to enroll in
                    AF199.
                </td>
                <td> C152, C172, C172R </td>
            </tr>
            <tr>
                <td> <a href="201A.html">AF201A</a> </td>
                <td> Private Pilot stage one course. Students will learn the basics of maneuvers, aerodynamics, weather,
                    airspace, and airport operations
                    in preparation for their first solo flight.
                </td>
                <td> C152, C172, C172R </td>
            <tr>
                <td> <a href="201b.html">AF201B</a> </td>
                <td> Private Pilot stage two course. Students will build on the foundation of AF201A and learn the
                    fundamentals of cross-country flight planning,
                    night flight, and basic flight maneuvers by reference to instruments. Course will culminate in the
                    student passing their checkride with
                    an FAA designee and receiving their private pilot certificate.
                </td>
                <td> C152, C172, C172R </td>
            </tr>
            <tr>
                <td> <a href="203.html">AF203</a> </td>
                <td> Commercial Pilot stage one course. Students will build on private pilot flight experience and will be
                    introduced to commercial pilot
                    flight maneuvers. Extra emphasis is placed on gained confidence in solo operation of the aircraft.
                </td>
                <td> C172 G1000 *</td>
            </tr>
            <tr>
                <td> <a href="204.html">AF204</a> </td>
                <td> Commercial Pilot stage two course. Students will build on experience gained in AF203 and will continue
                    to work towards mastery of commercial pilot maneuvers.
                    Additional emphasis is placed on confidence in solo operation with additional emphasis placed on solo
                    cross country operation.
                </td>
                <td> C172 G1000 *</td>
            </tr>
            <tr>
                <td> <a href="206a.html">AF206A</a> </td>
                <td> Instrument Pilot stage one course. Students will learn the basics of instrument flight and the IFR
                    system. </td>
                <td> C172 G1000 </td>
            </tr>
            <tr>
                <td> <a href="206b.html">AF206B</a> </td>
                <td> Instrument Pilot stage two course. Students will build on the foundation of knowledge gained in AF206A
                    and will earn an Instrument Rating
                    by the end of this course.
                </td>
                <td> C172 G1000 </td>
            </tr>
            <tr>
                <td> <a href="207a.html">AF207A</a> </td>
                <td> Commercial Pilot stage three course. Students will build upon experience gained in AF203 and AF204 and
                    will earn a Commercial
                    Pilot Certificate at the end of this course.
                </td>
                <td> C172 G1000 *, PA28R **</td>
            </tr>
            <tr>
                <td> AF207B </td>
                <td> Commercial Multi-Engine course. Students will gain the knowlege and skills necessary to receive a
                    multi-engine rating add-on
                    to their commercial pilot certificate.
                </td>
                <td> C310 </td>
            </tr>
        </table>
        <p> * For AF203, AF204, and AF207A, C172 G1000 aircraft is used by default. However, students may complete their
            lessons in C172, C172R, or C152 aircraft.
            Stage checks in these courses must be taken in C172 G1000.
        </p>
        <p> ** To receive complex aircraft training necessary for the commercial pilot certificate, students must complete
            specific flight lessons
            in the PA28R (Piper Arrow) aircraft during AF207A. Use of this aircraft is prohibited outside of these specific
            lessons in AF207A.
        </p>
        
    
    
    </div>
    </body>
    
</html>

