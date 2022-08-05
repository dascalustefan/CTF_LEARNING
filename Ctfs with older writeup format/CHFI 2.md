CHFI chapter 3 summary


#### General Considerations
Something can be proven by verifying either the actual hypothesis or disproven by verifying the null hypothesis.
Review your results from different points of view and communicate findings to the client with realistic expectations about why and how you arrived at your results.
Conclusion is judgement based on facts
Opinion is judgement without certainty or proof
The forensics investigation process to be followed should comply with local laws and established precedents,  must follow a repeatable and well-documented set of steps such that every iteration of analysis provides the same findings.

#### Setting up a lab
- Planning and budgeting considerations
- Physical and Structural design considerations
- Work area considerations
- Physical security considerations
- Human resource considerations
- Forensic lab licensing

Types of investigations -> based on crime statistics prev year and trend
Equipment Required -> both forensic and non-forensic workstations, locker for equipment
Physical Security -> log register for visitor data, contains purpose,date,time and contact person.
- Shield workstations using TEMPEST.
Licenses:
- American Society of Crime Laboratory Directors (ASCLD)/LAB accreditation (not only for digital forensics but for forensic labs in general). Their certification path includes the 17025 below 
- ISO/IEC 17025 accreditation (8 components scope, normative references, terms and definitions, general requirements, structural requirements, resource requirements, process requirements, and management system requirements)
Human Resources:
- Photographer Photographs the crime scene and the evidence gathered 
- Incident Responder Responsible for the measures to be taken when an incident occurs
- Incident Analyzer Examines the evidence acquired and sorts the useful evidence 
- Evidence Examiner/Investigator Analyzes the incidents based on their occurrence
- Evidence Documenter Documents all the evidence and the phases present in the investigation process
- Evidence Manager Manages the evidence in such a way that it is admissible in the court of law 
- Evidence Witness Offers a formal opinion in the form of a testimony in the court of law
- Attorney Provides legal advice

Hardware Requirements:
- Two or more forensic workstations with good processing power and RAM 
- Specialized cables 
- Write-blockers 
- Drive duplicators 
- Archive and Restore devices 
- Media sterilization systems 
- Other equipment that allow forensic software tools to work 
- Computer Forensic hardware toolkit, such as Paraben's First Responder Bundle, DeepSpar Disk Imager, FRED forensic workstation etc

Validating lab software and hardware:
- document the test methodology, results, and theory of the test design while testing the tools.


The forensic unit must review and update its quality management system at least once in 3 years to ensure that the system meets the quality needs of the unit.


###First Response
Attempts to recover data by untrained persons compromise the integrity of the files or make it inadmissible in court
Non-For staff protect the crime scene (secure surroundings+notes+photos)


First Responder-> person that arrives first at a crime scene
First response by non-forensics staff-> protects the crime scene and ensures that it is in a secure state +notes+photographs+ surrounding area to the incident is secured+computing systems/electronic devices
First response by system/network administrators -> report to the organizational ir procedures. Should not intervene unless directed by (incident/duty manager, for. analyst). He can take measures such as (record screen if pc on,transfer logs to clean media,seek management approval for power off, isolate computers or digital for tamper protection, document details of the incident)
First response by laboratory forensic staff ->
- document the scene(photo+sketch)
- collect incident info (questions+interviews)
- plan search&seizure(warrant,consent,witness signatures)
- Identify&collect evidence(initial search,secure & evaluate the crime scene, seize evidence, deal with off/on devices)
- package evidence(label bags/containers)
- transport evidence(proper handling/chain of custody)

### Documenting the crime scene
- maintain a record of the process (identification,extraction,analysis,preservation)
- document position of equipment, difficult to find electronic components, state of electronic devices
- photograph monitor screen (photo the crime scene multiple times all the scene visible don't alter stuff while photographing, cables photographed/labeled so reconstruction is possible)
- sketches of the scene that include objects present and locations

##### Search and seizure flow: plan search&seizure-> initial search ->secure and evaluate scene -> seizing evidence at scene

##### Description of the incident 
- Case name or title of the incident 
- Location of the incident
- Applicable jurisdiction and relevant legislation
- Determining the extent of authority to search
- Creating a chain of custody document
##### Details of equipment to be seized: 
- Structure type and size 
- Location(all in one place, spread across the building or floors)?
- Type of device and model number
- Power status
- Network status and type of network
- Backups (if any), last time and date, location of backup
- If it is necessary to take the server down and the business impact of this action
##### Other details:
Search and seizure type (overt/covert)
Approval from local management
Health and safety precautions

There are instances when the user is present and their consent is required before the search for evidence begins.
In such cases, appropriate forms for jurisdiction need to be used and carried in the forensic grab bag.

#### Witness statements:
- Depending on the legislation in the jurisdiction, a signature (or two) may or may not be required to certify the search and seizure of evidence
- Typically one witness signature is required if it is the forensic analyst or law enforcement officer conducting the seizure 
- Where two signatures are required, guidance should be sought to determine who the second signatory should be Whoever signs as a witness must have a clear understanding of that role, and may be called upon to provide a witness statement or attend court proceeding

#### Warrant:
A search warrant is a written order issued by a judge that directs a law enforcement officer to search for a particular piece of evidence at a particular location
The investigating officer must conduct the investigation process in a lawful manner, which means, a search warrant from the court is required for search and seizure
Warrants can be issued for an entire company, a floor, room, device, car, house, or any company-owned property as per the requirement

#### Search 
"When destruction of evidence is imminent, a warrantless seizure of that evidence is justified if there is probable cause to believe that the item seized constitutes evidence of criminal activity." United States v. David. 756 F. Supp. 1385, 1392 (D. Nev. l991)
Agents may search a place or object without a warrant or, for that matter, without probable cause, if a person with authority has consented. Schneckloth v. Bustamonte, 412 U.S. 218, 219 (1973)

###Collecting incident Info
Before search and seizure activities begin, investigators should gather the following information about the victim devices and connected systems while adhering to departmental policies and applicable laws: 
Actual holders and/or users of any electronic devices present at the crime scene 
Web mail and social networking website account information 
Usernames 
Internet service providers 
Passwords required to access the resources
Purpose of using the system
Automatic applications in use 
Documents explaining the hardware or software installed on the system
Any off-site data storage
Unique security schemes or destructive devices

### Scene searching
Recognise sources of evidence, protect physical evidence(fingerprints), find telephone lines in models and caller id boxes, record observations, maintain a search and seizure log.
Follow standard procedures, ensure the scene is safe, isolate other persons, locate and help victims, don't allow access to the scene, establish a perimeter, protect data, transmit messages to other units, request help
Pieces of evidence found at the crime scene should be identified, recorded, seized, and bagged with no attempts to determine the contents or status. Tags are date and time of collection and initials of the collecting person.
Forensic investigators might encounter a variety of computers and other information storage and processing devices at the crime scene, which should be handled differently at the time of search and seizure to protect the integrity of the evidence

If a computer is switched ON and the screen is viewable, photograph the screen and document the running programs, open files or data of evidentiary value
If a computer is ON and the monitor shows a screensaver, move the mouse slowly without pressing any mouse button, then photograph the screen and document the programs
f a portable computer wakes up, record the time and date at which this occurs, take a photograph of the screen, and document all programs running
Pull the power cord from the back of the computer immediately in the following situations: There is indication on-screen that data is being overwritten or deleted Destructive processes are observed to be running to obliterate data from data storage devices The computer screen shows a typical Microsoft Windows environment; in this case, disconnection of power supply would still preserve many valuable information such as the time of last user login, recently used documents and commands etc.
After collecting volatile data, pull the plug from the back of the computer to disconnect power supply
In case of portable computers, remove the battery and unplug the power cord from the wall socket
If the battery removal is not possible, press down the power switch for 30 seconds to force the power off

Disassemble and package it by doing the following things: Remove the power supply cord from the back of the computer and from the wall outlet, or battery backup device and secure it Disconnect all wires and cables from the computer and secure them Check for any removable media and secure them if present Tag the evidence clearly and note all important details in the search and seizure evidence log Document the chain of custody
If a monitor is switched OFF and the display is blank: Turn the monitor ON, move the mouse slightly, observe the changes from a blank screen to another screen and note the changes Photograph the screen
If a monitor is switched ON and the display is blank: Move the mouse slightly If the screen does not change on moving the mouse slightly, do not press any keys
Photograph the screen 
Unplug the network cable from the router and modem in order to prevent further attacks
Open any recently created documents from the startup or system32 folder in Windows and the rc.local file in Linux
Examine the open files for sensitive data such as passwords or images
Search for unusual MAC (Modified, Accessed, or Changed) times on vital folders, and startup files

For windows pull the plug
For mac apple icon->shutdown
For unix if root pass prompt Console->sync;sync;halt|no password=> pull the plug
         if console #sign mode enter user id enter sync;sync;halt to shutdown
    
For smartphones:
o Collect and label the power cables and package the device o Collect information on whether any security feature is enabled on the device such as pass patterns, passwords, or biometrics
o Look for any computing systems that may contain device backups
o Tag the evidence and note all important details of the seized item in the search and seizure evidence log

The chain of custody document contains the complete information about the obtained evidence, such as the following: Case number Name and title from whom it was received Address and telephone number Location from where the evidence was obtained Date/time of evidence Item number/quantity/ description of items

The panel on the front of evidence bags must, at the very least, contain the following details: ▪ Date and time of seizure ▪ Incident responder who seized the evidence ▪ Exhibit number ▪ Where the evidence was seized from ▪ Details of the contents of the evidence bag ▪ Submitting agency and its address

Ensure the gathered electronic evidence is correctly documented, labeled, and listed before packaging Pay special attention to hidden or trace evidence, and take necessary actions to safeguard it Pack magnetic media in antistatic packaging Do not use materials such as plastic bags for packaging because they may produce static electricity Avoid folding and scratching storage devices such as diskettes, DVDs, and tapes Make sure that all containers that contain evidence are labeled in the appropriate way Use antishock packing material such as bubble wrap, Styrofoam, etc. in the containers holding evidence

Evidence number
Example: aaa/ddmmyy/nnnn/zz Where:
aaa are the initials of the forensic analyst or law enforcement officer seizing the equipment ddmmyy is the date of the seizure nnnn is the sequential number of the exhibits seized by the analyst, starting with 001
zz is the sequential number for parts of the same exhibit (for example, A would be the computer, B would be the monitor, C would be the keyboard, etc.)

Transporting evidence
Avoid turning the computer upside down or putting it on its side during transportation Keep the electronic evidence collected from the crime scene away from magnetic sources such as radio transmitters, speaker magnets, and heated seats
Store the evidence in a safe area, away from extreme heat, cold, or moisture Avoid storing electronic evidence in vehicles for a long period of time Maintain proper chain of custody on the evidence that is to be transported
Ensure that wireless or portable devices do not connect to the networks by storing them in signal blocking containers

Copy_the_data
Make a duplicate of the collected data to preserve the original
The data should be duplicated bit by bit to represent the same original data
Calculate the hash value of the original data and the forensic image generated and check if there is a match in the result to verify its integrity
Once a copy of the original data is made and verified, you can use the copy for further processing
Use industry standard or licensed hardware or software tools to duplicate the data 
Make two or three copies

This phase includes the following: ▪ Analyzing the file content for data usage ▪ Analyzing the date and time of file creation and modification ▪ Finding the users associated with file creation, access, and file modification ▪ Determining the physical storage location of the file ▪ Timeline generation ▪ Identifying the root cause of the incident


Determine the possibility of exploring other investigative procedures to gather additional evidence (e.g., checking host data and examining network service logs for any information of evidentiary value, collecting case-specific evidence from social media, identifying remote storage locations etc.)
Gather additional information related to the case (e.g., aliases, email accounts, ISP used, names, network configuration, system logs, and passwords) by interviewing the respective individuals
Consider the relevance of components that are out of the scope of investigation; for example, equipment such as laminators, check paper, scanners, and printers in case of any fraud; or digital cameras in case of other nefarious activities

Temporal analysis
It produces a sequential event trail, which sheds light on important factors such as what happened and who was involved
Relational analysis 
It correlates the actions of suspect and victim
Functional analysis
It provides a description of the possible conditions of a crime. It testifies to the events responsible for a crime in relation to their functionalities
