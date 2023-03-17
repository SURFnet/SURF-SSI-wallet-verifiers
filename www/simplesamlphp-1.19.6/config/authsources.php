<?php
$config = [
    // This is a authentication source which handles SimpleSAMLphp admin authentication.
    'admin' => [
        'core:AdminPassword',
    ],
    'pizza' => [
       'authirma:IRMA',
       'irma_api_server' => 'https://irma-verifier.verifier.test.eduid.nl',
       'jwt_privatekeyfile' => 'irma.test.eduid.nl.pem',
       'jwt_apiserver_publickeyfile' => '/home/ubuntu/irmaserver/certs/irma.test.eduid.nl.crt',
       'issuer_id' => 'eduid-demo',
       'issuer_displayname' => 'my IRMA Verifier',
       'requested_attributes' => [
        [
          [ "label" => "Affiliation", "attributes" => ["irma-demo.surf.surfconext.affiliation"] ],
        ],
      ],
    ], 
    'surfspot' => [
       'authirma:IRMA',
       'irma_api_server' => 'https://irma-verifier.verifier.test.eduid.nl',
       'jwt_privatekeyfile' => 'irma.test.eduid.nl.pem',
       'jwt_apiserver_publickeyfile' => '/home/ubuntu/irmaserver/certs/irma.test.eduid.nl.crt',
       'issuer_id' => 'eduid-demo',
       'issuer_displayname' => 'my IRMA Verifier',
       'requested_attributes' => [
        [
          [ "label" => "Identifier", "attributes" => ["irma-demo.surf.eduid.eppn"] ],
	  [ "label" => "Email", "attributes" => ["irma-demo.surf.eduid.emailadres"] ],
 	  [ "label" => "Name", "attributes" => ["irma-demo.surf.eduid.displayname"] ],       
	  [ "label" => "Affiliation", "attributes" => ["irma-demo.surf.surfconext.affiliation"] ],
	],
      ],
    ],
    'ey' => [
       'authirma:IRMA',
       'irma_api_server' => 'https://irma-verifier.verifier.test.eduid.nl',
       'jwt_privatekeyfile' => 'irma.test.eduid.nl.pem',
       'jwt_apiserver_publickeyfile' => '/home/ubuntu/irmaserver/certs/irma.test.eduid.nl.crt',
       'issuer_id' => 'eduid-demo',
       'issuer_displayname' => 'my IRMA Verifier',
       'requested_attributes' => [
        [
          [ "label" => "Identifier", "attributes" => ["irma-demo.surf.eduid.eppn"] ],
	  [ "label" => "Email", "attributes" => ["irma-demo.surf.eduid.emailadres"] ],
	  [ "label" => "Name", "attributes" => ["irma-demo.surf.eduid.displayname"] ],
          [ "label" => "Learner Identifier", "attributes" => ["irma-demo.surf.edubadge.learner_id"] ],
          [ "label" => "Badge logo", "attributes" => ["irma-demo.surf.edubadge.badge_logo_url"] ],
	  [ "label" => "Badge logo", "attributes" => ["irma-demo.surf.edubadge.badge_issued_on"] ],
          [ "label" => "Badge Title", "attributes" => ["irma-demo.surf.edubadge.badge_title"] ],       
          [ "label" => "Badge Issuer", "attributes" => ["irma-demo.surf.edubadge.badge_issuer"] ],
	  [ "label" => "Badge Issuer logo", "attributes" => ["irma-demo.surf.edubadge.badge_issuer_logo_url"] ],
        ],
      ],
    ],
    'irma' => [
       'authirma:IRMA',
       'irma_api_server' => 'https://irma-verifier.verifier.test.eduid.nl',
       'jwt_privatekeyfile' => 'irma.test.eduid.nl.pem',
       'jwt_apiserver_publickeyfile' => '/home/ubuntu/irmaserver/certs/irma.test.eduid.nl.crt',
       'issuer_id' => 'eduid-demo',
       'issuer_displayname' => 'my IRMA Verifier',
       'requested_attributes' => [
//        [
//          [ "label" => "Name", "attributes" => ["pbdf.gemeente.personalData.fullname"] ],
//          [ "label" => "Over 18", "attributes" => ["pbdf.gemeente.personalData.over18"] ],
//          [ "label" => "DIGID level", "attributes" => ["pbdf.gemeente.personalData.digidlevel"] ],
//        ], 
//        [
//          [ "label" => "Name", "attributes" => ["irma-demo.pbdf.linkedin.fullname"] ],
//          [ "label" => "Email", "attributes" => ["irma-demo.pbdf.linkedin.email"] ],//
//          [ "label" => "Profile", "attributes" => ["irma-demo.pbdf.linkedin.profileurl"] ],
//        ],         
        [
//          [ "label" => "Institute", "attributes" => ["irma-demo.pbdf.surfnet-2.schacHomeOrganization"] ],
          [ "label" => "Affiliation", "attributes" => ["irma-demo.pbdf.surfnet-2.type"] ],
//          [ "label" => "Affiliations", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.eduPersonScopedAffiliation"] ],
//          [ "label" => "ID", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.subject-id"] ],
//          [ "label" => "Full name", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.displayName"] ],
//          [ "label" => "Given name", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.givenName"] ],
//          [ "label" => "Family name", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.sn"] ],
//          [ "label" => "Email address", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.mail"] ],
//          [ "label" => "Assurance", "attributes" => ["irma-demo.geant-incubator.edugain-proxy.eduPersonAssurance"] ], 
        ],
//                [
//          [ "label" => "Entitlements", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonEntitlement"] ],
//          [ "label" => "ExternalAffilations", "attributes" => ["irma-demo.geant-incubator.surf-sram.voperson_external_affiliation"] ], 
//          [ "label" => "Home org", "attributes" => ["irma-demo.geant-incubator.surf-sram.schacHomeOrganization"] ], 
//          [ "label" => "Affiliations", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonScopedAffiliation"] ], 
//          [ "label" => "VO identifier", "attributes" => ["irma-demo.geant-incubator.surf-sram.subject-id"] ], 
//          [ "label" => "Name", "attributes" => ["irma-demo.geant-incubator.surf-sram.displayName"] ], 
//          [ "label" => "email", "attributes" => ["irma-demo.geant-incubator.surf-sram.mail"] ], 
//          [ "label" => "Assurance", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonAssurance"] ], 
//          [ "label" => "ePPN", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonPrincipalName"] ], 
//          [ "label" => "ORCID", "attributes" => ["irma-demo.geant-incubator.surf-sram.eduPersonOrcid"] ], 
//          [ "label" => "UID", "attributes" => ["irma-demo.geant-incubator.surf-sram.UID"] ], 
//          [ "label" => "External ID", "attributes" => ["irma-demo.geant-incubator.surf-sram.voperson_external_id"] ], 
//          [ "label" => "SSH key", "attributes" => ["irma-demo.geant-incubator.surf-sram.ssh_public_key"] ], 
//            ],
      ],
    ],
];
