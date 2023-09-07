# Advohire
## a website for advocates and clients to professionally interact with each other
# Law Firm Management Platform Database Schema

## Users Table
| Column Name | Column Type |
|-------------|-------------|
| user_id (Primary Key) | INT |
| username | VARCHAR |
| password (hashed) | VARCHAR |
| email | VARCHAR |
| role | ENUM (Citizen, Attorney, Paralegal, LegalAssistant, Partner, Associate, Admin, BillingSpecialist, ClientServices, ITAdmin, HRManager, MarketingManager, ComplianceOfficer) |

## LawFirms Table
| Column Name | Column Type |
|-------------|-------------|
| firm_id (Primary Key) | INT |
| name | VARCHAR |
| location | VARCHAR |
| ... (other firm details) | ... |

## Departments Table
| Column Name | Column Type |
|-------------|-------------|
| department_id (Primary Key) | INT |
| firm_id (Foreign Key referencing LawFirms Table) | INT |
| name | VARCHAR |

## Attorneys Table
| Column Name | Column Type |
|-------------|-------------|
| attorney_id (Primary Key) | INT |
| user_id (Foreign Key referencing Users Table) | INT |
| firm_id (Foreign Key referencing LawFirms Table) | INT |
| department_id (Foreign Key referencing Departments Table) | INT |
| ... (other attorney details) | ... |

## Cases Table
| Column Name | Column Type |
|-------------|-------------|
| case_id (Primary Key) | INT |
| firm_id (Foreign Key referencing LawFirms Table) | INT |
| department_id (Foreign Key referencing Departments Table) | INT |
| attorney_id (Foreign Key referencing Attorneys Table) | INT |
| client_id (Foreign Key referencing Clients Table) | INT |
| status | VARCHAR |
| ... | ... |

## Documents Table
| Column Name | Column Type |
|-------------|-------------|
| document_id (Primary Key) | INT |
| case_id (Foreign Key referencing Cases Table) | INT |
| title | VARCHAR |
| content | TEXT |
| ... | ... |

## Clients Table
| Column Name | Column Type |
|-------------|-------------|
| client_id (Primary Key) | INT |
| user_id (Foreign Key referencing Users Table) | INT |
| ... | ... |

## Appointments Table
| Column Name | Column Type |
|-------------|-------------|
| appointment_id (Primary Key) | INT |
| case_id (Foreign Key referencing Cases Table) | INT |
| attorney_id (Foreign Key referencing Attorneys Table) | INT |
| client_id (Foreign Key referencing Clients Table) | INT |
| date_time | DATETIME |
| location | VARCHAR |
| ... | ... |

## Messages Table
| Column Name | Column Type |
|-------------|-------------|
| message_id (Primary Key) | INT |
| sender_id (Foreign Key referencing Users Table) | INT |
| receiver_id (Foreign Key referencing Users Table) | INT |
| content | TEXT |
| date_time | DATETIME |
| ... | ... |

## LegalResources Table
| Column Name | Column Type |
|-------------|-------------|
| resource_id (Primary Key) | INT |
| title | VARCHAR |
| content | TEXT |
| ... | ... |

## LegalResearch Table
| Column Name | Column Type |
|-------------|-------------|
| research_id (Primary Key) | INT |
| title | VARCHAR |
| content | TEXT |
| ... | ... |

## Calendar Table
| Column Name | Column Type |
|-------------|-------------|
| event_id (Primary Key) | INT |
| user_id (Foreign Key referencing Users Table) | INT |
| date_time | DATETIME |
| location | VARCHAR |
| description | TEXT |
| ... | ... |

## Notifications Table
| Column Name | Column Type |
|-------------|-------------|
| notification_id (Primary Key) | INT |
| user_id (Foreign Key referencing Users Table) | INT |
| content | TEXT |
| date_time | DATETIME |
