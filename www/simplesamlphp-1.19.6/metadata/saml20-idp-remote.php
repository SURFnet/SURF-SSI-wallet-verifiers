<?php
$metadata['https://engine.test.surfconext.nl/authentication/idp/metadata'] = [
    'name' => [
        'en' => 'SURFconext proxy test',
        'nl' => 'SURFconext proxy test',
    ],
    'SingleSignOnService' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208',
    'certificate' => 'engineblock.test.surfconext.nl.20190208.pem',
 
    // convert OID formatted attributes from SAML assertion to 'name' similar to LDAP
    // so they will be available as 'mail' and 'displayName'
    'authproc' => [
      50 => [
        'class' => 'core:AttributeMap', 'oid2name',
      ],
    ],
];
$metadata['http://login-test.ds.eur.nl/adfs/services/trust'] = [
    'entityid' => 'http://login-test.ds.eur.nl/adfs/services/trust',
    'description' => [
        'en' => 'Erasmus Universiteit Rotterdam',
    ],
    'OrganizationName' => [
        'en' => 'Erasmus Universiteit Rotterdam',
    ],
    'name' => [
        'nl' => 'Erasmus Universiteit Rotterdam (ADFS Test)',
        'en' => 'Erasmus Universiteit Rotterdam (ADFS Test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Erasmus Universiteit Rotterdam',
    ],
    'url' => [
        'en' => 'http://www.eur.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.eur.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/24db3355ebbdf20c99a609217da68989',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'eur.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Erasmus Universiteit Rotterdam (ADFS Test)',
            'en' => 'Erasmus Universiteit Rotterdam (ADFS Test)',
        ],
        'Description' => [
            'nl' => 'Erasmus Universiteit Rotterdam (ADFS Test)',
            'en' => 'Erasmus Universiteit Rotterdam (ADFS Test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Erasmus',
                'Universiteit',
                'Rotterdam',
                'Erasmus',
                'University',
                'Rotterdam',
                'EUR',
                'Test',
            ],
            'nl' => [
                'Erasmus',
                'Universiteit',
                'Rotterdam',
                'Erasmus',
                'University',
                'Rotterdam',
                'EUR',
                'Test',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/eur.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://login-test.maastrichtuniversity.nl/adfs/services/trust'] = [
    'entityid' => 'http://login-test.maastrichtuniversity.nl/adfs/services/trust',
    'description' => [
        'en' => 'Universiteit Maastricht',
    ],
    'OrganizationName' => [
        'en' => 'Universiteit Maastricht',
    ],
    'name' => [
        'nl' => 'Universiteit Maastricht (test)',
        'en' => 'Maastricht University (test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Maastricht University',
    ],
    'url' => [
        'en' => 'http://www.maastrichtuniversity.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.maastrichtuniversity.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/042739ea37f40d5e42358372d98a7ec4',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'maastrichtuniversity.nl',
        'unimaas.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universiteit Maastricht (test)',
            'en' => 'Maastricht University (test)',
        ],
        'Description' => [
            'nl' => 'Universiteit Maastricht (test)',
            'en' => 'Maastricht University (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Maastricht',
                'University',
                '',
                'Universiteit',
                'unimaas',
                'Universiteit',
                'mu',
                'um',
            ],
            'nl' => [
                'Maastricht',
                'University',
                '',
                'Universiteit',
                'unimaas',
                'Universiteit',
                'mu',
                'um',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/unimaas.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://irma.vetting-poc.surfconext.nl/metadata'] = [
    'entityid' => 'https://irma.vetting-poc.surfconext.nl/metadata',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/a4030fbd4b14798ee46382e77e4889c1',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/dummy-idp.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://beta.surfnet.nl/SURFdropjesIdP'] = [
    'entityid' => 'https://beta.surfnet.nl/SURFdropjesIdP',
    'description' => [
        'nl' => 'SURFdrops beta IdP [Org-nl]',
        'en' => 'SURFdrops beta IdP [Org-en]',
    ],
    'OrganizationName' => [
        'nl' => 'SURFdrops beta IdP [Org-nl]',
        'en' => 'SURFdrops beta IdP [Org-en]',
    ],
    'name' => [
        'nl' => 'SURFdrops beta IdP',
        'en' => 'SURFdrops beta IdP',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'SURFdrops beta IdP [OrgDN-nl]',
        'en' => 'SURFdrops beta IdP [OrgDN-en]',
    ],
    'url' => [
        'nl' => 'http://www.braindrops.nl/',
        'en' => 'http://www.braindrops.org/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.braindrops.nl/',
        'en' => 'http://www.braindrops.org/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/6fac1e6e3eedb200d4161c25ef3e5d67',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'surfnet.nl',
        'braindrops.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFdrops beta IdP',
            'en' => 'SURFdrops beta IdP',
        ],
        'Description' => [
            'nl' => 'Een IdP, beheerd door Henny Bekker, voor het testen van aansluitingen.',
            'en' => 'An IdP, operated by Henny Bekker, for testing purposes.',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'suiker',
                'drop',
                'Thee',
                'Zakje',
                'drops',
                'regen',
                'BrasemStraat',
                'UtreG',
                'HOOGRAVEN',
                'StaD',
            ],
            'nl' => [
                'suiker',
                'drop',
                'Thee',
                'Zakje',
                'drops',
                'regen',
                'BrasemStraat',
                'UtreG',
                'HOOGRAVEN',
                'StaD',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/SURFdropsBeta.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://idp.diy.surfconext.nl/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idp.diy.surfconext.nl/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/cb89911a9b2c64f39b1337a0e2cdd65d',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFconext Test IdP',
            'en' => 'SURFconext Test IdP',
        ],
        'Description' => [
            'nl' => 'IdP met kant-en-klare gebruikersacccount voor het testen van diensten',
            'en' => 'IdP with preconfigured user account for testing your service',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFconext',
                'DIY',
                'IdP',
                'test',
                'testing',
            ],
            'nl' => [
                'SURFconext',
                'DIY',
                'IdP',
                'test',
                'testing',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/surfconext.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SURFconext Test IdP',
        'en' => 'SURFconext Test IdP',
    ],
];
$metadata['https://samltest.id/saml/idp'] = [
    'entityid' => 'https://samltest.id/saml/idp',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/52ff28f86ec0d2ad1de5f9715c45d2a7',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'en' => 'A free and basic IdP for testing SAML deployments',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://samltest.id/saml/logo.png',
                'height' => 90,
                'width' => 225,
            ],
        ],
    ],
];
$metadata['http://sts-tst.zadkine.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts-tst.zadkine.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Zadkine (test)',
        'en' => 'Zadkine (test)',
    ],
    'OrganizationName' => [
        'nl' => 'Zadkine (test)',
        'en' => 'Zadkine (test)',
    ],
    'name' => [
        'nl' => 'Zadkine (test)',
        'en' => 'Zadkine (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Zadkine (test)',
        'en' => 'Zadkine (test)',
    ],
    'url' => [
        'nl' => 'http://www.zadkine.nl',
        'en' => 'http://www.zadkine.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.zadkine.nl',
        'en' => 'http://www.zadkine.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/35e4c0f39c877d8d2170fe2820fb1f4d',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'zadkine.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Zadkine (test)',
            'en' => 'Zadkine (test)',
        ],
        'Description' => [
            'nl' => 'Zadkine (test)',
            'en' => 'Zadkine (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Zadkine',
                'ROC',
                'MBO',
            ],
            'nl' => [
                'Zadkine',
                'ROC',
                'MBO',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/zadkine.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://adfs-t.summacollege.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs-t.summacollege.nl/adfs/services/trust',
    'description' => [
        'en' => 'Summa College',
    ],
    'OrganizationName' => [
        'en' => 'Summa College',
    ],
    'name' => [
        'nl' => 'Summa College (test)',
        'en' => 'Summa College (test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Summa College',
    ],
    'url' => [
        'en' => 'http://www.summacollege.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.summacollege.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/c53b3384eb049be9088e17af910c0ebd',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'summacollege.nl',
        'mc-eindhoven.nl',
        'knowhowsharing.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Summa College (test)',
            'en' => 'Summa College (test)',
        ],
        'Description' => [
            'nl' => 'Summa College test',
            'en' => 'Summa College test',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Summa',
                'College',
                '(test)',
            ],
            'nl' => [
                'Summa',
                'College',
                '(test)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/Summa_College.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://alpha.surfnet.nl/SURFdropjesIdP'] = [
    'entityid' => 'https://alpha.surfnet.nl/SURFdropjesIdP',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/24344660ba3dd0de50a13543b520d89a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'braindrops.nl',
        'braindrops.org',
        'wind.surfnet.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFdrops Alpha IdP',
            'en' => 'SURFdrops Alpha IdP',
        ],
        'Description' => [
            'nl' => 'Een IdP beheerd door Henny Bekker, voor het testen van aansluitingen.',
            'en' => 'An IdP operated by Henny Bekker, for testing purposes.',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Henny',
                'SURFdropsBeta',
                'alpha',
            ],
            'nl' => [
                'Henny',
                'SURFdropsBeta',
                'alpha',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/SURFdropsBeta.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SURFdrops Alpha IdP',
        'en' => 'SURFdrops Alpha IdP',
    ],
];
$metadata['http://adfsnp.noorderpoort.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfsnp.noorderpoort.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/11c6d00b293a28cffb1352ec15f6ae89',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Noorderpoort (Test)',
            'en' => 'ROC Noorderpoort (Test)',
        ],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'rpc',
                'noorderpoort',
                'test',
            ],
            'nl' => [
                'rpc',
                'noorderpoort',
                'test',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/Noorderpoort.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'ROC Noorderpoort (Test)',
        'en' => 'ROC Noorderpoort (Test)',
    ],
];
$metadata['http://adfs.albeda.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs.albeda.nl/adfs/services/trust',
    'description' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'OrganizationName' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'name' => [
        'nl' => 'ROC Albeda (test)',
        'en' => 'ROC Albeda (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'url' => [
        'nl' => 'http://www.albeda.nl/',
        'en' => 'http://www.albeda.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.albeda.nl/',
        'en' => 'http://www.albeda.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/5477c40ae345df2fe8f742e237d12398',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'albeda.nl',
        'student.albeda.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Albeda (test)',
            'en' => 'ROC Albeda (test)',
        ],
        'Description' => [
            'nl' => 'ROC Albeda (test)',
            'en' => 'ROC Albeda (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'roc',
                'albeda',
                'college',
                'rotterdam',
            ],
            'nl' => [
                'roc',
                'albeda',
                'college',
                'rotterdam',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/albeda.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/b79a547e-3653-4501-b7db-1368c2807f47/'] = [
    'entityid' => 'https://sts.windows.net/b79a547e-3653-4501-b7db-1368c2807f47/',
    'description' => [
        'en' => 'Biblionet Groningen',
    ],
    'OrganizationName' => [
        'en' => 'Biblionet Groningen',
    ],
    'name' => [
        'nl' => 'Biblionet Groningen (Azure test)',
        'en' => 'Biblionet Groningen (Azure test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Biblionet Groningen',
    ],
    'url' => [
        'en' => 'http://www.biblionetgroningen.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.biblionetgroningen.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/fb77506944f0f19d5771cdbbd6c0886a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'mijneigenbibliotheek.nl',
        'biblionetgroningen.nl',
        'groningerforum.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Biblionet Groningen (Azure test)',
            'en' => 'Biblionet Groningen (Azure test)',
        ],
        'Description' => [
            'nl' => 'Biblionet Groningen (Azure test)',
            'en' => 'Biblionet Groningen (Azure test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Biblionet',
                'Groningen',
                'BNGRON',
                'Bibliotheek',
                'Library',
            ],
            'nl' => [
                'Biblionet',
                'Groningen',
                'BNGRON',
                'Bibliotheek',
                'Library',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/biblionet.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.test2.eduid.nl'] = [
    'entityid' => 'https://login.test2.eduid.nl',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0e02dc001c56f2bf78c699a00910253f',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/eduid.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://authentigate.surfmarket.nl/adfs/services/trust'] = [
    'entityid' => 'http://authentigate.surfmarket.nl/adfs/services/trust',
    'description' => [
        'en' => 'SURFmarket (test)',
    ],
    'OrganizationName' => [
        'en' => 'SURFmarket (test)',
    ],
    'name' => [
        'nl' => 'SURFmarket (deprecated)',
        'en' => 'SURFmarket (deprecated)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'SURFmarket (test)',
    ],
    'url' => [
        'en' => 'http://www.surfmarket.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.surfmarket.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/6311f145ad0a0cadb87d4d1eee947d41',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'surfmarket.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFmarket (deprecated)',
            'en' => 'SURFmarket (deprecated)',
        ],
        'Description' => [
            'nl' => 'SURFmarket (deprecated)',
            'en' => 'SURFmarket (deprecated)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFmarket',
                'SURFdiensten',
            ],
            'nl' => [
                'SURFmarket',
                'SURFdiensten',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/surfmarket.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://sts.takw1c.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts.takw1c.nl/adfs/services/trust',
    'description' => [
        'nl' => 'ROC Koning Willem I College',
        'en' => 'ROC Koning Willem I College',
    ],
    'OrganizationName' => [
        'nl' => 'ROC Koning Willem I College',
        'en' => 'ROC Koning Willem I College',
    ],
    'name' => [
        'nl' => 'Koning Willem I College',
        'en' => 'Koning Willem I College',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Koning Willem I College',
        'en' => 'Koning Willem I College',
    ],
    'url' => [
        'nl' => 'https://kw1c.nl/',
        'en' => 'https://kw1c.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://kw1c.nl/',
        'en' => 'https://kw1c.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/3f24fce8b76fac1acdb6cd72af51b0b8',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'kw1c.nl',
        'edu-kw1c.nl',
        'takw1c.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'ROC Koning Willem I College (test)',
            'en' => 'ROC Koning Willem I College (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'kwic',
                'kw1c',
            ],
            'nl' => [
                'kwic',
                'kw1c',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/kw1c.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://login.test-mborijnland.nl/adfs/services/trust'] = [
    'entityid' => 'http://login.test-mborijnland.nl/adfs/services/trust',
    'description' => [
        'nl' => 'mboRijnland',
        'en' => 'mboRijnland',
    ],
    'OrganizationName' => [
        'nl' => 'mboRijnland',
        'en' => 'mboRijnland',
    ],
    'name' => [
        'nl' => 'mboRijnland (test)',
        'en' => 'mboRijnland (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'mboRijnland',
        'en' => 'mboRijnland',
    ],
    'url' => [
        'nl' => 'https://mborijnland.nl/',
        'en' => 'https://mborijnland.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://mborijnland.nl/',
        'en' => 'https://mborijnland.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/957f66979e1ddc3ec572832fff512feb',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'mborijnland.nl',
        'test-mborijnland.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'mboRijnland (test)',
            'en' => 'mboRijnland (test)',
        ],
        'Description' => [
            'nl' => 'mboRijnland (test)',
            'en' => 'mboRijnland (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'mborijnland',
                'mbo',
                'rijnland',
            ],
            'nl' => [
                'mborijnland',
                'mbo',
                'rijnland',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/mborijnland2.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://auth.amumc.nl/adfs/services/trust'] = [
    'entityid' => 'http://auth.amumc.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/d220c91a733798b44f778945f811fa11',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Academisch Ziekenhuis Maastricht (nieuwe test)',
            'en' => 'Academisch Ziekenhuis Maastricht (new test)',
        ],
        'Description' => [
            'nl' => 'Academisch Ziekenhuis Maastricht (nieuwe test)',
            'en' => 'Academisch Ziekenhuis Maastricht (new test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'academisch',
                'ziekenhuis',
                'maastricht',
                'test',
                'mumc',
            ],
            'nl' => [
                'academisch',
                'ziekenhuis',
                'maastricht',
                'test',
                'mumc',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/azm.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Academisch Ziekenhuis Maastricht (nieuwe test)',
        'en' => 'Academisch Ziekenhuis Maastricht (new test)',
    ],
];
$metadata['https://tst-idp.id.rug.nl/nidp/saml2/metadata'] = [
    'entityid' => 'https://tst-idp.id.rug.nl/nidp/saml2/metadata',
    'description' => [
        'en' => 'Rijksuniversiteit Groningen',
    ],
    'OrganizationName' => [
        'en' => 'Rijksuniversiteit Groningen',
    ],
    'name' => [
        'nl' => 'Rijksuniversiteit Groningen (test)',
        'en' => 'Rijksuniversiteit Groningen (test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'RUG-TST',
    ],
    'url' => [
        'en' => 'http://www.rug.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.rug.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/dc966cd913c21b2c01a90eba223a5059',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'rug.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Rijksuniversiteit Groningen (test)',
            'en' => 'Rijksuniversiteit Groningen (test)',
        ],
        'Description' => [
            'nl' => 'Rijksuniversiteit Groningen (test)',
            'en' => 'Rijksuniversiteit Groningen (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'RUG',
                'Rijksuniversiteit',
                'Groningen',
            ],
            'nl' => [
                'RUG',
                'Rijksuniversiteit',
                'Groningen',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/rug.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.uaccess-a.leidenuniv.nl/nidp/saml2/metadata'] = [
    'entityid' => 'https://login.uaccess-a.leidenuniv.nl/nidp/saml2/metadata',
    'description' => [
        'en' => 'Universiteit Leiden',
    ],
    'OrganizationName' => [
        'en' => 'Universiteit Leiden',
    ],
    'name' => [
        'nl' => 'Universiteit Leiden Identity Server (acceptatie)',
        'en' => 'Universiteit Leiden Identity Server (acceptatie)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Universiteit Leiden',
    ],
    'url' => [
        'en' => 'https://www.universiteitleiden.nl',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.universiteitleiden.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/59cfd49bebd69cb24da4b6f8cf1206cc',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'umail.leidenuniv.nl',
        'leidenuniv.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universiteit Leiden Identity Server (acceptatie)',
            'en' => 'Universiteit Leiden Identity Server (acceptatie)',
        ],
        'Description' => [
            'nl' => 'Universiteit Leiden Identity Server (acceptatie)',
            'en' => 'Universiteit Leiden Identity Server (acceptatie)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Universiteit',
                'Leiden',
                'UL',
            ],
            'nl' => [
                'Universiteit',
                'Leiden',
                'UL',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/leiden.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts-acc.hu.nl/adfs/services/trust'] = [
    'entityid' => 'https://sts-acc.hu.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/4b280c014ce9f823678f7d8cab80965a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Hogeschool Utrecht (nieuwe ADFS test)',
            'en' => 'Hogeschool Utrecht (new ADFS test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'Utrecht',
                '(new',
                'ADFS',
                'test)',
            ],
            'nl' => [
                'Hogeschool',
                'Utrecht',
                '(nieuwe',
                'ADFS',
                'test)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hu.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/9066ba86-6695-4cf5-902c-0a55088c2fae/'] = [
    'entityid' => 'https://sts.windows.net/9066ba86-6695-4cf5-902c-0a55088c2fae/',
    'description' => [
        'en' => 'ROC Friese Poort',
    ],
    'OrganizationName' => [
        'en' => 'ROC Friese Poort',
    ],
    'name' => [
        'nl' => 'ROC Friese Poort (test)',
        'en' => 'ROC Friese Poort (test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'ROC Friese Poort (test)',
    ],
    'url' => [
        'en' => 'http://www.rocfriesepoort.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.rocfriesepoort.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/dda64a089a2ac23d496efb2bbfd9a046',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'rocfriesepoort.nl',
        'flevopoort.nl',
        'edu.rocfriesepoort.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Friese Poort (test)',
            'en' => 'ROC Friese Poort (test)',
        ],
        'Description' => [
            'nl' => 'ROC Friese Poort (test)',
            'en' => 'ROC Friese Poort (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'roc',
                'friese',
                'poort',
                'fp',
                'friesepoort',
            ],
            'nl' => [
                'roc',
                'friese',
                'poort',
                'fp',
                'friesepoort',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/rocfriesepoort.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://cas-acc.ic.uva.nl/cas'] = [
    'entityid' => 'https://cas-acc.ic.uva.nl/cas',
    'description' => [
        'en' => 'Universiteit van Amsterdam',
    ],
    'OrganizationName' => [
        'en' => 'Universiteit van Amsterdam',
    ],
    'name' => [
        'nl' => 'Universiteit van Amsterdam (CAS)',
        'en' => 'Universiteit van Amsterdam (CAS)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Universiteit van Amsterdam',
    ],
    'url' => [
        'en' => 'http://www.uva.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.uva.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/14e4bc6c513030e75867e29e2e54c3f9',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'uva.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universiteit van Amsterdam (CAS)',
            'en' => 'Universiteit van Amsterdam (CAS)',
        ],
        'Description' => [
            'nl' => 'Universiteit van Amsterdam (CAS)',
            'en' => 'Universiteit van Amsterdam (CAS)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'UvA',
                'universiteit',
                'Amsterdam',
            ],
            'nl' => [
                'UvA',
                'university',
                'Amsterdam',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/uva.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://idp-acc.surfnet.nl'] = [
    'entityid' => 'https://idp-acc.surfnet.nl',
    'description' => [
        'en' => 'SURFnet bv (ACC)',
    ],
    'OrganizationName' => [
        'en' => 'SURFnet bv (ACC)',
    ],
    'name' => [
        'nl' => 'SURFnet bv (ACC) - This IdP is for testing only',
    ],
    'OrganizationDisplayName' => [
        'en' => 'SURFnet bv (ACC)',
    ],
    'url' => [
        'en' => 'http://www.surfnet.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.surfnet.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/9c06c6dc9075398f1b6c67275f13a636',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'surfnet.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFnet bv (ACC) - This IdP is for testing only',
        ],
        'Description' => [
            'nl' => 'SURFnet bv (ACC)',
            'en' => 'SURFnet bv (ACC)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFnet',
                'IdP-NG',
                'test',
            ],
            'nl' => [
                'SURFnet',
                'IdP-NG',
                'test',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/surfnet.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/0ace682c-5851-4d9f-863a-2c2a3340212d/'] = [
    'entityid' => 'https://sts.windows.net/0ace682c-5851-4d9f-863a-2c2a3340212d/',
    'description' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'OrganizationName' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'name' => [
        'nl' => 'ROC Albeda (Azure AD Test)',
        'en' => 'ROC Albeda (Azure AD Test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'url' => [
        'nl' => 'http://www.albeda.nl/',
        'en' => 'http://www.albeda.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.albeda.nl/',
        'en' => 'http://www.albeda.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/08d7ee94240b1e7b0dcecd87aa58a7bb',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'albeda.nl',
        'student.albeda.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Albeda (Azure AD Test)',
            'en' => 'ROC Albeda (Azure AD Test)',
        ],
        'Description' => [
            'nl' => 'ROC Albeda (Azure AD Test)',
            'en' => 'ROC Albeda (Azure AD Test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'roc',
                'albeda',
                'college',
                'rotterdam',
            ],
            'nl' => [
                'roc',
                'albeda',
                'college',
                'rotterdam',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/albeda.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://irma2saml.moonshot.utr.surfcloud.nl/metadata'] = [
    'entityid' => 'https://irma2saml.moonshot.utr.surfcloud.nl/metadata',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/e862f46ea785da31236e4e1d802a1a13',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'pilot.irma.surfdrive.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/dummy-idp.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://adfs3test.aventus.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs3test.aventus.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/bcda5c52fa46c1ff3eddff2597e3ab0e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Aventus (ADFS3 Test)',
            'en' => 'ROC Aventus (ADFS3 Test)',
        ],
        'Description' => [
            'nl' => 'ROC Aventus (ADFS3 Test)',
            'en' => 'ROC Aventus (ADFS3 Test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'aventus',
                'ADFS3',
                'test',
            ],
            'nl' => [
                'aventus',
                'ADFS3',
                'test',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/aventus2.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'ROC Aventus (ADFS3 Test)',
        'en' => 'ROC Aventus (ADFS3 Test)',
    ],
];
$metadata['http://login.aai.braindrops.nl/adfs/services/trust'] = [
    'entityid' => 'http://login.aai.braindrops.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0aa9b9fde71571fb773a47c5e7611c2e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'braindrops.nl',
        'braindrops.org',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFdrops ADFS4 IdP',
            'en' => 'SURFdrops ADFS4 IdP',
        ],
        'Description' => [
            'nl' => 'SURFdrops ADFS4 IdP',
            'en' => 'SURFdrops ADFS4 IdP',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFdrops',
                'ADFS',
                'adfs4',
                'IdP',
                'dropjes',
            ],
            'nl' => [
                'SURFdrops',
                'ADFS',
                'adfs4',
                'IdP',
                'dropjes',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/SURFdropsADFS.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SURFdrops ADFS4 IdP',
        'en' => 'SURFdrops ADFS4 IdP',
    ],
];
$metadata['http://login.acceptatie.saxion.nl/adfs/services/trust'] = [
    'entityid' => 'http://login.acceptatie.saxion.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/582be7bb8f8e90cfd9d42bcada507207',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Saxion Hogeschool (test/acceptatie)',
            'en' => 'Saxion University of Applied Sciences (test/stating)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'saxion',
                'university',
                'of',
                'applied',
                'sciences',
            ],
            'nl' => [
                'saxion',
                'hogeschool',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/saxion.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://federatie-acc.amc.nl/adfs/services/trust'] = [
    'entityid' => 'http://federatie-acc.amc.nl/adfs/services/trust',
    'description' => [
        'en' => 'Academisch Medisch Centrum',
    ],
    'OrganizationName' => [
        'en' => 'Academisch Medisch Centrum',
    ],
    'name' => [
        'nl' => 'Academisch Medisch Centrum (Acceptatie)',
        'en' => 'Academisch Medisch Centrum (Acceptatie)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Academisch Medisch Centrum',
    ],
    'url' => [
        'en' => 'http://www.amc.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.amc.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/da950274f8a725830befcc0b849f18ca',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'amc.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Academisch Medisch Centrum (Acceptatie)',
            'en' => 'Academisch Medisch Centrum (Acceptatie)',
        ],
        'Description' => [
            'nl' => 'Academisch Medisch Centrum (Acceptatie)',
            'en' => 'Academisch Medisch Centrum (Acceptatie)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'AMC',
                'Academisch',
                'Medisch',
                'Centrum',
            ],
            'nl' => [
                'AMC',
                'Academisch',
                'Medisch',
                'Centrum',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/amc.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['urn:thki:sid:idp2'] = [
    'entityid' => 'urn:thki:sid:idp2',
    'description' => [
        'en' => 'THKI',
    ],
    'OrganizationName' => [
        'en' => 'THKI',
    ],
    'name' => [
        'en' => 't3est',
    ],
    'OrganizationDisplayName' => [
        'en' => 't3est',
    ],
    'url' => [
        'en' => 'https://voorbee',
    ],
    'OrganizationURL' => [
        'en' => 'https://voorbee',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/854014647a0b38686ae31e9e6882f39c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'thkidp',
            'en' => 'thkidp',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'thki',
                'thijs',
                'AAPNOOT',
            ],
            'nl' => [
                'thki',
                'thijs',
                'AAPNOOT',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/avat_st.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.two.ou.nl/am'] = [
    'entityid' => 'https://login.two.ou.nl/am',
    'description' => [
        'nl' => 'Open Universiteit',
        'en' => 'Open Universiteit',
    ],
    'OrganizationName' => [
        'nl' => 'Open Universiteit',
        'en' => 'Open Universiteit',
    ],
    'name' => [
        'nl' => 'Open Universiteit (Test OpenAM)',
        'en' => 'Open Universiteit (Test OpenAM)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Open Universiteit',
        'en' => 'Open Universiteit',
    ],
    'url' => [
        'nl' => 'http://www.ou.nl',
        'en' => 'http://www.ou.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.ou.nl',
        'en' => 'http://www.ou.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/39d8b5a9d8e9a7e7063d3068a5fa0fd1',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'ou.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Open Universiteit (Test OpenAM)',
            'en' => 'Open Universiteit (Test OpenAM)',
        ],
        'Description' => [
            'nl' => 'Open Universiteit (Test OpenAM)',
            'en' => 'Open Universiteit (Test OpenAM)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Open',
                'Universiteit',
                'OU',
            ],
            'nl' => [
                'Open',
                'Universiteit',
                'OU',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/ou.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://eduid.demo.eduid.nl'] = [
    'entityid' => 'https://eduid.demo.eduid.nl',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/c60f46fd77c2f4aecd76583baddf83a0',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'EduID demo environment',
            'en' => 'EduID demo environment',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'eduid',
            ],
            'nl' => [
                'eduid',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/surfconext.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://dev-login.hva.nl/adfs/services/trust'] = [
    'entityid' => 'http://dev-login.hva.nl/adfs/services/trust',
    'description' => [
        'en' => 'Hogeschool van Amsterdam',
    ],
    'OrganizationName' => [
        'en' => 'Hogeschool van Amsterdam',
    ],
    'name' => [
        'nl' => 'Hogeschool van Amsterdam (ontwikkeling)',
        'en' => 'Hogeschool van Amsterdam (development)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Hogeschool van Amsterdam',
    ],
    'url' => [
        'en' => 'http://www.surffederatie.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.surffederatie.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/47b49668100f2b31cd085de0d3cbeb41',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'hva.nl',
        'acc.hva.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Hogeschool van Amsterdam (ontwikkeling)',
            'en' => 'Hogeschool van Amsterdam (development)',
        ],
        'Description' => [
            'nl' => 'Hogeschool van Amsterdam (ontwikkeling)',
            'en' => 'Hogeschool van Amsterdam (development)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'van',
                'Amsterdam',
                'development',
            ],
            'nl' => [
                'Hogeschool',
                'van',
                'Amsterdam',
                'ontwikkeling',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/hva.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/af0c0e3f-a380-4b5d-9573-baf47a797aa5/'] = [
    'entityid' => 'https://sts.windows.net/af0c0e3f-a380-4b5d-9573-baf47a797aa5/',
    'description' => [
        'en' => 'MBO Utrecht',
    ],
    'OrganizationName' => [
        'en' => 'MBO Utrecht',
    ],
    'name' => [
        'nl' => 'MBO Utrecht (Azure MFA)',
        'en' => 'MBO Utrecht (Azure MFA)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'MBO Utrecht',
    ],
    'url' => [
        'en' => 'https://www.mboutrecht.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.mboutrecht.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/b14e3fa36ec0f6d3569d645c25bc13e1',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'mboutrecht.nl',
        'hermanbroodacademie.nl',
        'student.mboutrecht.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'MBO Utrecht (Azure MFA)',
            'en' => 'MBO Utrecht (Azure MFA)',
        ],
        'Description' => [
            'nl' => 'MBO Utrecht',
            'en' => 'MBO Utrecht',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'MBO',
                'Utrecht',
            ],
            'nl' => [
                'MBO',
                'Utrecht',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/MBO-Utrecht.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://stsfed.test.vu.nl/adfs/services/trust'] = [
    'entityid' => 'http://stsfed.test.vu.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/531fcc652324ea73c5478a0306e4390f',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'vu.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'VU University Amsterdam',
            'en' => 'An IdP operated by VU University Amsterdam',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'VU',
                'University',
                'Amsterdam',
                'test',
            ],
            'nl' => [
                'VU',
                'University',
                'Amsterdam',
                'test',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/vu.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/2dd9f889-dc46-4d53-b9e2-ed90804e2a87/'] = [
    'entityid' => 'https://sts.windows.net/2dd9f889-dc46-4d53-b9e2-ed90804e2a87/',
    'description' => [
        'nl' => 'Onderwijsgroep Tilburg (Azure, Test)',
        'en' => 'Onderwijsgroep Tilburg (Azure, Test)',
    ],
    'OrganizationName' => [
        'nl' => 'Onderwijsgroep Tilburg (Azure, Test)',
        'en' => 'Onderwijsgroep Tilburg (Azure, Test)',
    ],
    'name' => [
        'nl' => 'Onderwijsgroep Tilburg (Azure, Test)',
        'en' => 'Onderwijsgroep Tilburg (Azure, Test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Onderwijsgroep Tilburg (Azure, Test)',
        'en' => 'Onderwijsgroep Tilburg (Azure, Test)',
    ],
    'url' => [
        'nl' => 'http://www.onderwijsgroeptilburg.nl/',
        'en' => 'http://www.onderwijsgroeptilburg.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.onderwijsgroeptilburg.nl/',
        'en' => 'http://www.onderwijsgroeptilburg.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/8d7554a1d842f3196578d038d690dded',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'onderwijsgroeptilburg.nl',
        'ogt013.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Onderwijsgroep Tilburg (Azure, Test)',
            'en' => 'Onderwijsgroep Tilburg (Azure, Test)',
        ],
        'Description' => [
            'nl' => 'Onderwijsgroep Tilburg',
            'en' => 'Onderwijsgroep Tilburg',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Onderwijsgroep',
                'Tilburg,',
                'ROC',
                'Tilburg,',
                'Campus',
                '013,',
                'Entreecollege',
                'Tilburg,',
                'NCVB',
                'Bedrijfsopleidingen,',
                'Vakcollege',
                'Tilburg',
            ],
            'nl' => [
                'Onderwijsgroep',
                'Tilburg,',
                'ROC',
                'Tilburg,',
                'Campus',
                '013,',
                'Entreecollege',
                'Tilburg,',
                'NCVB',
                'Bedrijfsopleidingen,',
                'Vakcollege',
                'Tilburg',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/onderwijsgroep-tilburg.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://fs-a.umcutrecht.nl/adfs/services/trust'] = [
    'entityid' => 'http://fs-a.umcutrecht.nl/adfs/services/trust',
    'description' => [
        'en' => 'UMC Utrecht',
    ],
    'OrganizationName' => [
        'en' => 'UMC Utrecht',
    ],
    'name' => [
        'nl' => 'Universitair Medisch Centrum Utrecht (Acc)',
        'en' => 'Universitair Medisch Centrum Utrecht (Acc)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Universitair Medisch Centrum Utrecht',
    ],
    'url' => [
        'en' => 'http://www.umcutrecht.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.umcutrecht.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/b45e2034439bec7b3f0c83748972dc0c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universitair Medisch Centrum Utrecht (Acc)',
            'en' => 'Universitair Medisch Centrum Utrecht (Acc)',
        ],
        'Description' => [
            'nl' => 'Universitair Medisch Centrum Utrecht',
            'en' => 'Universitair Medisch Centrum Utrecht',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'umcu',
                'umc',
                'utrecht',
                'azu',
                'wkz',
            ],
            'nl' => [
                'umcu',
                'umc',
                'utrecht',
                'azu',
                'wkz',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/UMC-Utrecht_logo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['gatekeepert.tudelft.nl'] = [
    'entityid' => 'gatekeepert.tudelft.nl',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/02d90b42f8ba490516e936c708985aee',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'tudelft.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Technische Universiteit Delft (Test) (OpenASelect)',
            'en' => 'Technische Universiteit Delft (Test) (OpenASelect)',
        ],
        'Description' => [
            'nl' => 'Technische Universiteit Delft (Test) (OpenASelect)',
            'en' => 'Technische Universiteit Delft (Test) (OpenASelect)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'tudelft',
                'delft',
                'tu',
            ],
            'nl' => [
                'tudelft',
                'delft',
                'tu',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/tudelft.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Technische Universiteit Delft (Test) (OpenASelect)',
        'en' => 'Technische Universiteit Delft (Test) (OpenASelect)',
    ],
];
$metadata['http://adfs.hartingcollege.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs.hartingcollege.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/377be5f3a954497130316f2728419360',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'hartingcollege.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Demo IDP voor Office365 domein hartingcollege.nl',
            'en' => 'Demo IDP for Office365 domain hartingcollege.nl',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'office',
                '365',
                'harting',
                'college',
            ],
            'nl' => [
                'office',
                '365',
                'harting',
                'college',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/surf.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.awo.ou.nl/am'] = [
    'entityid' => 'https://login.awo.ou.nl/am',
    'description' => [
        'nl' => 'Open Universiteit',
        'en' => 'Open Universiteit',
    ],
    'OrganizationName' => [
        'nl' => 'Open Universiteit',
        'en' => 'Open Universiteit',
    ],
    'name' => [
        'nl' => 'Open Universiteit (Acc OpenAM)',
        'en' => 'Open Universiteit (Acc OpenAM)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Open Universiteit',
        'en' => 'Open Universiteit',
    ],
    'url' => [
        'nl' => 'http://www.ou.nl',
        'en' => 'http://www.ou.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.ou.nl',
        'en' => 'http://www.ou.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/8816b53510faa9514fb1161fbcc90628',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'ou.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Open Universiteit (Acc OpenAM)',
            'en' => 'Open Universiteit (Acc OpenAM)',
        ],
        'Description' => [
            'nl' => 'Open Universiteit (Acc OpenAM)',
            'en' => 'Open Universiteit (Acc OpenAM)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Open',
                'Universiteit',
                'OU',
            ],
            'nl' => [
                'Open',
                'Universiteit',
                'OU',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/ou.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://consultancy-cim.onegini.com'] = [
    'entityid' => 'https://consultancy-cim.onegini.com',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/5979abc4ea3173404d2a0b5b67c0f247',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'en' => 'In Onegini you can create and maintain your digital identity. You can log in with Onegini using an account you use more often so its easier to remember.',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'onegini',
                'gini',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://consultancy-cim.onegini.com/static/img/placeholders/onegini.png',
                'height' => 105,
                'width' => 105,
            ],
        ],
    ],
];
$metadata['https://login.test.eduid.nl'] = [
    'entityid' => 'https://login.test.eduid.nl',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/41446efe752391789124c87fed487952',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'eduID (NL) test omgeving',
            'en' => 'eduID (NL) test enviroment',
        ],
        'Description' => [
            'nl' => 'eduID (NL) IdP test omgeving',
            'en' => 'eduID (NL) IdP test environment',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'eduid',
                'nl',
                'guest',
                'idp',
                'onegini',
                'surfguest',
            ],
            'nl' => [
                'eduid',
                'nl',
                'guest',
                'idp',
                'onegini',
                'surfguest',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/eduid.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'eduID (NL) test omgeving',
        'en' => 'eduID (NL) test enviroment',
    ],
];
$metadata['http://adfs.trocvantwente.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs.trocvantwente.nl/adfs/services/trust',
    'description' => [
        'nl' => 'ROC van Twente',
        'en' => 'ROC van Twente',
    ],
    'OrganizationName' => [
        'nl' => 'ROC van Twente',
        'en' => 'ROC van Twente',
    ],
    'name' => [
        'nl' => 'ROC van Twente',
        'en' => 'ROC van Twente',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'ROC van Twente',
        'en' => 'ROC van Twente',
    ],
    'url' => [
        'nl' => 'https://www.rocvantwente.nl/',
        'en' => 'https://www.rocvantwente.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.rocvantwente.nl/',
        'en' => 'https://www.rocvantwente.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0449a8fe2e1321a3c9197c01a6b7aa98',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'rocvantwente.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'ROC van Twente (ADFS - test)',
            'en' => 'TNAM01.rocvantwente.nl',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'ROC',
                'van',
                'Twente',
                '(ADFS',
                '-',
                'test)',
            ],
            'nl' => [
                'ROC',
                'van',
                'Twente',
                '(ADFS',
                '-',
                'test)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/rocvantwente.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://stsfed.accept.vu.nl/adfs/services/trust'] = [
    'entityid' => 'http://stsfed.accept.vu.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/17035f2dd442d8048c8ca3747a4d4f90',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'vu.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'VU University Amsterdam',
            'en' => 'An IdP operated by VU University Amsterdam',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'VU',
                'University',
                'Amsterdam',
                'staging',
            ],
            'nl' => [
                'VU',
                'University',
                'Amsterdam',
                'acceptatie',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/vu.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://test-idp.geant.org'] = [
    'entityid' => 'https://test-idp.geant.org',
    'description' => [
        'en' => 'GÉANT',
    ],
    'OrganizationName' => [
        'en' => 'GÉANT',
    ],
    'name' => [
        'en' => 'GEANT Staff Identity Provider (TEST)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'GEANT Staff Identity Provider (TEST)',
    ],
    'url' => [
        'en' => 'https://www.geant.org',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.geant.org',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/5298b54352c2172461cf04db6596961b',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://idp.geant.org/module.php/geant/resources/fancytheme/GEANT_logo_lo_res.jpg',
                'height' => 324,
                'width' => 700,
            ],
        ],
    ],
];
$metadata['https://idin.surfconext.nl/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idin.surfconext.nl/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/36918af9efcbf04972bbece94bd6b2bb',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'iDIN',
            'en' => 'iDIN',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'iDIN,',
                'zoek',
            ],
            'nl' => [
                'iDIN,',
                'koez',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://idin.surfconext.nl/module.php/idin/images/iDIN%20logo.png',
                'height' => 60,
                'width' => 120,
            ],
        ],
    ],
];
$metadata['https://university-utrecht-eduid'] = [
    'entityid' => 'https://university-utrecht-eduid',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/5cef9c5deebe06f99c9e0eec5f47164c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'UU EduID environment',
            'en' => 'UU EduID environment',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'eduid',
            ],
            'nl' => [
                'eduid',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/surfconext.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://idp.privacybydesign.foundation/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idp.privacybydesign.foundation/simplesaml/saml2/idp/metadata.php',
    'description' => [
        'nl' => 'IRMA Guest IdP | Privacy by Design Foundation',
        'en' => 'IRMA Guest IdP | Privacy by Design Foundation',
    ],
    'OrganizationName' => [
        'nl' => 'IRMA Guest IdP | Privacy by Design Foundation',
        'en' => 'IRMA Guest IdP | Privacy by Design Foundation',
    ],
    'name' => [
        'nl' => 'IRMA Guest IdP | Privacy by Design Foundation',
        'en' => 'IRMA Guest IdP | Privacy by Design Foundation',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'IRMA Guest IdP | Privacy by Design Foundation',
        'en' => 'IRMA Guest IdP | Privacy by Design Foundation',
    ],
    'url' => [
        'nl' => 'https://privacybydesign.foundation/',
        'en' => 'https://privacybydesign.foundation/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://privacybydesign.foundation/',
        'en' => 'https://privacybydesign.foundation/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/49db09fe9ea55a3881101925de4bcb1c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'IRMA IdP vertaalt IRMA attributen in SAML attributen',
            'en' => 'IRMA IdP translates IRMA attributes into SAML attributes',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/pbdf-logo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/0a33589b-0036-4fe8-a829-3ed0926af886/'] = [
    'entityid' => 'https://sts.windows.net/0a33589b-0036-4fe8-a829-3ed0926af886/',
    'description' => [
        'nl' => 'Breda University of Applied Sciences',
        'en' => 'Breda University of Applied Sciences',
    ],
    'OrganizationName' => [
        'nl' => 'Breda University of Applied Sciences',
        'en' => 'Breda University of Applied Sciences',
    ],
    'name' => [
        'nl' => 'Breda University of Applied Sciences (test Azure AD)',
        'en' => 'Breda University of Applied Sciences (test Azure AD)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Breda University of Applied Sciences',
        'en' => 'Breda University of Applied Sciences',
    ],
    'url' => [
        'nl' => 'http://www.buas.nl',
        'en' => 'http://www.buas.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.buas.nl',
        'en' => 'http://www.buas.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/376a04cf9f581374c8903243b274c1d2',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'nhtv.nl',
        'bu.nl',
        'buas.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Breda University of Applied Sciences (test Azure AD)',
            'en' => 'Breda University of Applied Sciences (test Azure AD)',
        ],
        'Description' => [
            'nl' => 'Breda University of Applied Sciences (test Azure AD)',
            'en' => 'Breda University of Applied Sciences (test Azure AD)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Breda',
                'University',
                'of',
                'Applied',
                'Sciences',
                'buas',
            ],
            'nl' => [
                'Breda',
                'University',
                'of',
                'Applied',
                'Sciences',
                'buas',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/buas.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://ntiv2ontw.3bm.nl/saml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://ntiv2ontw.3bm.nl/saml/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/a240a6ba78085e35e70841a3a7110511',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'en' => 'An IdP operated by NTI',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://www.nti.nl/restyling/img/images/logo-bigger.png',
                'height' => 89,
                'width' => 109,
            ],
        ],
    ],
];
$metadata['http://sts.wau.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts.wau.nl/adfs/services/trust',
    'description' => [
        'en' => 'Wageningen University & Research (WAU)',
    ],
    'OrganizationName' => [
        'en' => 'Wageningen University & Research (WAU)',
    ],
    'name' => [
        'nl' => 'Wageningen University & Research (WAU)',
        'en' => 'Wageningen University & Research (WAU)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Wageningen University & Research (WAU)',
    ],
    'url' => [
        'en' => 'http://www.wageningenur.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.wageningenur.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0355823aa7e9a6ce44f49914d02e3d20',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'wur.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Wageningen University & Research (WAU)',
            'en' => 'Wageningen University & Research (WAU)',
        ],
        'Description' => [
            'nl' => 'Wageningen University & Research (WAU)',
            'en' => 'Wageningen University & Research (WAU)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Wageningen',
                'Universiteit',
                'university',
                'WAU',
            ],
            'nl' => [
                'Wageningen',
                'Universiteit',
                'WUR',
                'UR',
                'OTA',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/wur.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login-test.tudelft.nl/sso/saml2/idp/metadata.php'] = [
    'entityid' => 'https://login-test.tudelft.nl/sso/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/85861e4a0ea17e0f49ab54809694f537',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'tudelft.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Technische Universiteit Delft (Login test)',
            'en' => 'Technische Universiteit Delft (Login test)',
        ],
        'Description' => [
            'nl' => 'Technische Universiteit Delft (Login test)',
            'en' => 'Technische Universiteit Delft (Login test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'tudelft',
                'delft',
                'tu',
            ],
            'nl' => [
                'tudelft',
                'delft',
                'tu',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/tudelft.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Technische Universiteit Delft (Login test)',
        'en' => 'Technische Universiteit Delft (Login test)',
    ],
];
$metadata['https://test.saml.uvt.nl/saml2/idp/metadata.php'] = [
    'entityid' => 'https://test.saml.uvt.nl/saml2/idp/metadata.php',
    'description' => [
        'en' => 'Tilburg University (TEST)',
    ],
    'OrganizationName' => [
        'en' => 'Tilburg University (TEST)',
    ],
    'name' => [
        'nl' => 'Tilburg University (TEST)',
        'en' => 'Tilburg University (TEST)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Tilburg University (TEST)',
    ],
    'url' => [
        'en' => 'https://www.tilburguniversity.edu',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.tilburguniversity.edu',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/5de8be58828f450ec61a67ad0bef726b',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Tilburg University (TEST)',
            'en' => 'Tilburg University (TEST)',
        ],
        'Description' => [
            'nl' => 'Tilburg University (TEST)',
            'en' => 'Tilburg University (TEST)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'tilburg',
                'university',
                'uvt',
            ],
            'nl' => [
                'uvt',
                'test',
                'universiteit',
                'van',
                'tilburg',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/uvtboom.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://fsa.rocmondriaan.tv/adfs/services/trust'] = [
    'entityid' => 'http://fsa.rocmondriaan.tv/adfs/services/trust',
    'description' => [
        'nl' => 'ROC Mondriaan',
        'en' => 'ROC Mondriaan',
    ],
    'OrganizationName' => [
        'nl' => 'ROC Mondriaan',
        'en' => 'ROC Mondriaan',
    ],
    'name' => [
        'nl' => 'ROC Mondriaan (test)',
        'en' => 'ROC Mondriaan (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'ROC Mondriaan',
        'en' => 'ROC Mondriaan',
    ],
    'url' => [
        'nl' => 'http://www.rocmondriaan.nl/',
        'en' => 'http://www.rocmondriaan.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.rocmondriaan.nl/',
        'en' => 'http://www.rocmondriaan.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/a1e591a8ca125dfbd93dcba7a65b12b1',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'rocmondriaan.tv',
        'student.rocmondriaan.tv',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Mondriaan (test)',
            'en' => 'ROC Mondriaan (test)',
        ],
        'Description' => [
            'nl' => 'ROC Mondriaan (test)',
            'en' => 'ROC Mondriaan (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'ROC',
                'Mondriaan',
                'MBO',
                'Den',
                'Haag',
                'Zuid',
                'Holland',
            ],
            'nl' => [
                'ROC',
                'Mondriaan',
                'International',
                'Business',
                'Hotel',
                'Management',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/ROC-Mondriaan_Logo.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://sts.talneta.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts.talneta.nl/adfs/services/trust',
    'description' => [
        'nl' => 'ROC van Amsterdam Flevoland en VOvA',
        'en' => 'ROC van Amsterdam Flevoland en VOvA',
    ],
    'OrganizationName' => [
        'nl' => 'ROC van Amsterdam Flevoland en VOvA',
        'en' => 'ROC van Amsterdam Flevoland en VOvA',
    ],
    'name' => [
        'nl' => 'ROC van Amsterdam Flevoland en VOvA (test)',
        'en' => 'ROC van Amsterdam Flevoland en VOvA (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'ROC van Amsterdam Flevoland en VOvA',
        'en' => 'ROC van Amsterdam Flevoland en VOvA',
    ],
    'url' => [
        'nl' => 'http://www.rocva.nl/organisatie/pages/english.aspx',
        'en' => 'http://www.rocva.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.rocva.nl/organisatie/pages/english.aspx',
        'en' => 'http://www.rocva.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/859c228cbc46a110e7494305e869d9ac',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'talnet.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC van Amsterdam Flevoland en VOvA (test)',
            'en' => 'ROC van Amsterdam Flevoland en VOvA (test)',
        ],
        'Description' => [
            'nl' => 'ROC van Amsterdam (acceptatie)',
            'en' => 'ROC van Amsterdam (staging)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'ROC',
                'rocva',
                'Flevoland',
                'VOvA',
                'Amsterdam',
            ],
            'nl' => [
                'ROC',
                'rocva',
                'Flevoland',
                'VOvA',
                'Amsterdam',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/ROCvA_logo2.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://accounts.google.com/o/saml2?idpid=C01w2a9s5'] = [
    'entityid' => 'https://accounts.google.com/o/saml2?idpid=C01w2a9s5',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/5f38ee848d6af9262ae6b066de94ad43',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'braindrops.nl',
        'braindrops.org',
        'wind.surfnet.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFdrops Google-Apps IdP',
            'en' => 'SURFdrops Google-Apps IdP',
        ],
        'Description' => [
            'nl' => 'Een IdP beheerd door Henny Bekker, voor het testen van aansluitingen.',
            'en' => 'An IdP operated by Henny Bekker, for testing purposes.',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Henny',
                'SURFdropsBeta',
                'alpha',
            ],
            'nl' => [
                'Henny',
                'SURFdropsBeta',
                'alpha',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/SURFdropsBeta.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SURFdrops Google-Apps IdP',
        'en' => 'SURFdrops Google-Apps IdP',
    ],
];
$metadata['http://ststest.windesheim.nl/adfs/services/trust'] = [
    'entityid' => 'http://ststest.windesheim.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Hogeschool Windesheim',
        'en' => 'Hogeschool Windesheim',
    ],
    'OrganizationName' => [
        'nl' => 'Hogeschool Windesheim',
        'en' => 'Hogeschool Windesheim',
    ],
    'name' => [
        'nl' => 'Hogeschool Windesheim',
        'en' => 'Hogeschool Windesheim',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Hogeschool Windesheim',
        'en' => 'Hogeschool Windesheim',
    ],
    'url' => [
        'nl' => 'http://www.windesheim.nl',
        'en' => 'http://www.windesheim.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.windesheim.nl',
        'en' => 'http://www.windesheim.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/722f54110235b2258e3ef721c8d8c7de',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Hogeschool Windesheim (Test)',
            'en' => 'Hogeschool Windesheim (Test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'Windesheim',
            ],
            'nl' => [
                'Hogeschool',
                'Windesheim',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/windesheim.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://adfs.proxy.roc-cloud.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs.proxy.roc-cloud.nl/adfs/services/trust',
    'description' => [
        'nl' => 'ROC Midden Nederland',
        'en' => 'ROC Midden Nederland',
    ],
    'OrganizationName' => [
        'nl' => 'ROC Midden Nederland',
        'en' => 'ROC Midden Nederland',
    ],
    'name' => [
        'nl' => 'ROC Midden Nederland (Acceptatie)',
        'en' => 'ROC Midden Nederland (Acceptance)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'ROC Midden Nederland',
        'en' => 'ROC Midden Nederland',
    ],
    'url' => [
        'nl' => 'http://www.rocmn.nl',
        'en' => 'http://www.rocmn.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.rocmn.nl',
        'en' => 'http://www.rocmn.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/cd08808888f95ea7dac4aa3b82747282',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Midden Nederland (Acceptatie)',
            'en' => 'ROC Midden Nederland (Acceptance)',
        ],
        'Description' => [
            'nl' => 'ROC Midden Nederland is een onderwijsorganisatie voor middelbaar beroepsonderwijs, voortgezet onderwijs voor volwassen (VAVO Lyceum), bedrijfsopleidingen en participatieonderwijs in de provincie Utrecht.',
            'en' => 'ROC Midden Nederland is een onderwijsorganisatie voor middelbaar beroepsonderwijs, voortgezet onderwijs voor volwassen (VAVO Lyceum), bedrijfsopleidingen en participatieonderwijs in de provincie Utrecht.',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'rocmn',
                'ROC',
                'Midden',
                'Nederland',
                'Acceptance',
            ],
            'nl' => [
                'rocmn',
                'ROC',
                'Midden',
                'Nederland',
                'Acceptatie',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/ROCMNlogo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://dev-login.uva.nl/adfs/services/trust'] = [
    'entityid' => 'http://dev-login.uva.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Universiteit van Amsterdam',
        'en' => 'Universiteit van Amsterdam',
    ],
    'OrganizationName' => [
        'nl' => 'Universiteit van Amsterdam',
        'en' => 'Universiteit van Amsterdam',
    ],
    'name' => [
        'nl' => 'Universiteit van Amsterdam (ontwikkeling)',
        'en' => 'University of Amsterdam (development)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Universiteit van Amsterdam',
        'en' => 'Universiteit van Amsterdam',
    ],
    'url' => [
        'nl' => 'http://www.uva.nl',
        'en' => 'http://www.uva.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.uva.nl',
        'en' => 'http://www.uva.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/583c7fab05ed315cc065a9de90f5a16c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'acc.uva.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universiteit van Amsterdam (ontwikkeling)',
            'en' => 'University of Amsterdam (development)',
        ],
        'Description' => [
            'nl' => 'Universiteit van Amsterdam (ontwikkeling)',
            'en' => 'Universiteit van Amsterdam (development)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'university',
                'of',
                'amsterdam',
                'universiteit',
                'van',
                'amsterdam',
                'uva',
            ],
            'nl' => [
                'university',
                'of',
                'amsterdam',
                'universiteit',
                'van',
                'amsterdam',
                'uva',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/uva.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://inloggen.acc.sharepoint.hu.nl/adfs/services/trust'] = [
    'entityid' => 'http://inloggen.acc.sharepoint.hu.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/f90bc6b81263b3e279086bb180724c08',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Hogeschool Utrecht (nieuwe test)',
            'en' => 'Hogeschool Utrecht (new test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'Utrecht',
                '(new',
                'test)',
            ],
            'nl' => [
                'Hogeschool',
                'Utrecht',
                '(nieuwe',
                'test)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hu.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/87c50b58-2ef2-423d-a4db-1fa7c84efcfa/'] = [
    'entityid' => 'https://sts.windows.net/87c50b58-2ef2-423d-a4db-1fa7c84efcfa/',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/a8bcd9b19c6bdfe5574cc76f76031e57',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Avans Hogeschool (Azure, test)',
            'en' => 'Avans University of Applied Sciences (Azure, test)',
        ],
        'Description' => [
            'nl' => 'Avans Hogeschool (Azure, test)',
            'en' => 'Avans Hogeschool (Azure, test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'avans',
                'university',
                'of',
                'applied',
                'sciences',
                'avans',
                'hogeschool',
            ],
            'nl' => [
                'avans',
                'hogeschool',
                'avans',
                'university',
                'of',
                'applied',
                'sciences',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/avans.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Avans Hogeschool (Azure, test)',
        'en' => 'Avans University of Applied Sciences (Azure, test)',
    ],
];
$metadata['https://sts.windows.net/9516973f-79a2-4890-acbe-81a42de17563/'] = [
    'entityid' => 'https://sts.windows.net/9516973f-79a2-4890-acbe-81a42de17563/',
    'description' => [
        'nl' => 'Azure SAML Test IdP SURFconext Harry',
        'en' => 'Azure SAML Test IdP SURFconext Harry',
    ],
    'OrganizationName' => [
        'nl' => 'Azure SAML Test IdP SURFconext Harry',
        'en' => 'Azure SAML Test IdP SURFconext Harry',
    ],
    'name' => [
        'nl' => 'Azure SAML Test IdP SURFconext Harry',
        'en' => 'Azure SAML Test IdP SURFconext Harry',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Azure SAML Test IdP SURFconext Harry',
        'en' => 'Azure SAML Test IdP SURFconext Harry',
    ],
    'url' => [
        'nl' => 'https://github.com/HarryKodden',
        'en' => 'https://github.com/HarryKodden',
    ],
    'OrganizationURL' => [
        'nl' => 'https://github.com/HarryKodden',
        'en' => 'https://github.com/HarryKodden',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/8d4976118858b93e79617a511d642603',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'test',
                'idp',
                'azure',
                'harry',
                'andre',
                'hero',
                '',
            ],
            'nl' => [
                'test',
                'idp',
                'azure',
                'harry',
                'andre',
                'hero',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/dummy-idp.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.politieacademie.nl/nidp/saml2/metadata'] = [
    'entityid' => 'https://login.politieacademie.nl/nidp/saml2/metadata',
    'description' => [
        'en' => 'Politieacademie',
    ],
    'OrganizationName' => [
        'en' => 'Politieacademie',
    ],
    'name' => [
        'nl' => 'Politieacademie (test)',
        'en' => 'Politieacademie (test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Politieacademie',
    ],
    'url' => [
        'en' => 'https://www.politieacademie.nl',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.politieacademie.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/9753ae221f8ff836e7a4110b6ece621c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'politieacademie.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Politieacademie (test)',
            'en' => 'Politieacademie (test)',
        ],
        'Description' => [
            'nl' => 'Politieacademie (test)',
            'en' => 'Politieacademie (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Politieacademie',
            ],
            'nl' => [
                'Politieacademie',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/politieacademie.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://conext-acc.authenticatie.ru.nl/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://conext-acc.authenticatie.ru.nl/simplesaml/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/2635b36066792f54d4e5d385214aaa12',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'ru.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'An IdP operated by Radboud University Nijmegen',
            'en' => 'An IdP operated by Radboud University Nijmegen',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'university',
                'nijmegen',
                'ru',
            ],
            'nl' => [
                'universiteit',
                'nijmegen',
                'ru',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/radboudlogo120.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://stsip.amumc.nl/adfs/services/trust'] = [
    'entityid' => 'http://stsip.amumc.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/20bfcdce9d9e495bd989fa699e1056f7',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Academisch Ziekenhuis Maastricht (test)',
            'en' => 'Academisch Ziekenhuis Maastricht (test)',
        ],
        'Description' => [
            'nl' => 'Academisch Ziekenhuis Maastricht (test)',
            'en' => 'Academisch Ziekenhuis Maastricht (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'academisch',
                'ziekenhuis',
                'maastricht',
                'test',
                'mumc',
            ],
            'nl' => [
                'academisch',
                'ziekenhuis',
                'maastricht',
                'test',
                'mumc',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/azm.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Academisch Ziekenhuis Maastricht (test)',
        'en' => 'Academisch Ziekenhuis Maastricht (test)',
    ],
];
$metadata['http://loginota.wur.nl/adfs/services/trust'] = [
    'entityid' => 'http://loginota.wur.nl/adfs/services/trust',
    'description' => [
        'en' => 'Wageningen University & Research (WUR)',
    ],
    'OrganizationName' => [
        'en' => 'Wageningen University & Research (WUR)',
    ],
    'name' => [
        'nl' => 'Wageningen University & Research (WUR) (OTA)',
        'en' => 'Wageningen University & Research (WUR) (OTA)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Wageningen University & Research (WUR)',
    ],
    'url' => [
        'en' => 'http://www.wageningenur.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.wageningenur.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/40e75af410192fc7e035d3063319135d',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'wur.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Wageningen University & Research (WUR) (OTA)',
            'en' => 'Wageningen University & Research (WUR) (OTA)',
        ],
        'Description' => [
            'nl' => 'Wageningen University & Research (WUR) (OTA)',
            'en' => 'Wageningen University & Research (WUR) (OTA)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Wageningen',
                'Universiteit',
                'university',
                'WUR',
                'UR',
                'OTA',
            ],
            'nl' => [
                'Wageningen',
                'Universiteit',
                'WUR',
                'UR',
                'OTA',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/wur.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/335122f9-d4f4-4d67-a2fc-cd6dc20dde70/'] = [
    'entityid' => 'https://sts.windows.net/335122f9-d4f4-4d67-a2fc-cd6dc20dde70/',
    'description' => [
        'nl' => 'UMC Groningen',
        'en' => 'UMC Groningen',
    ],
    'OrganizationName' => [
        'nl' => 'UMC Groningen',
        'en' => 'UMC Groningen',
    ],
    'name' => [
        'nl' => 'UMC Groningen (AD Azure)',
        'en' => 'UMC Groningen (AD Azure)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'UMC Groningen',
        'en' => 'UMC Groningen',
    ],
    'url' => [
        'nl' => 'http://www.umcg.nl',
        'en' => 'http://www.umcg.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.umcg.nl',
        'en' => 'http://www.umcg.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/d8678743fe59ae9fed3337289844bf95',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'umcg.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'UMC Groningen (AD Azure)',
            'en' => 'UMC Groningen (AD Azure)',
        ],
        'Description' => [
            'nl' => 'UMCG (AD Azure)',
            'en' => 'UMCG (AD Azure)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'umcg',
                'UMC',
                'Groningen',
            ],
            'nl' => [
                'UMC',
                'Groningen',
                'umcg',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/sp/UMCGkort_fc.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://adfs4-aai.wind.surfnet.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs4-aai.wind.surfnet.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/9104562041552890a5c851fb0ddb5b9d',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'braindrops.nl',
        'braindrops.org',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFnet ADFS4 test IdP',
            'en' => 'SURFnet ADFS4 test IdP',
        ],
        'Description' => [
            'nl' => 'SURFnet ADFS4 test IdP',
            'en' => 'SURFnet ADFS4 test IdP',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFnet',
                'ADFS',
                'adfs4',
                'IdP',
                'dropjes',
            ],
            'nl' => [
                'SURFnet',
                'ADFS',
                'adfs4',
                'IdP',
                'dropjes',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/SURFdropsADFS.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SURFnet ADFS4 test IdP',
        'en' => 'SURFnet ADFS4 test IdP',
    ],
];
$metadata['https://adfst.stc-r.nl/adfs/services/trust'] = [
    'entityid' => 'https://adfst.stc-r.nl/adfs/services/trust',
    'description' => [
        'nl' => 'STC-Group',
        'en' => 'STC-Group',
    ],
    'OrganizationName' => [
        'nl' => 'STC-Group',
        'en' => 'STC-Group',
    ],
    'name' => [
        'nl' => 'STC-Group (test)',
        'en' => 'STC-Group (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'STC-Group',
        'en' => 'STC-Group',
    ],
    'url' => [
        'nl' => 'http://www.stc-group.nl/',
        'en' => 'http://www.stc-group.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.stc-group.nl/',
        'en' => 'http://www.stc-group.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/83073acea2f06c43601258fd855f5209',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'stc-r.nl',
        'edu.stc-r.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'STC-Group (test)',
            'en' => 'STC-Group (test)',
        ],
        'Description' => [
            'nl' => 'De STC-Group verzamelt, ontwikkelt, innoveert, beheert en distribueert kennis.',
            'en' => 'De STC-Group verzamelt, ontwikkelt, innoveert, beheert en distribueert kennis.',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'STC',
                'Opleiding',
                'Scheepvaart',
            ],
            'nl' => [
                'STC',
                'Opleiding',
                'Scheepvaart',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/stc-r.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://pieter.aai.surfnet.nl/simplesamlphp/saml2/idp/metadata.php'] = [
    'entityid' => 'https://pieter.aai.surfnet.nl/simplesamlphp/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/b77db83c5a74f97e821a62c78b597c4c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/surfconext.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://login.aai.braindrops.org/adfs/services/trust'] = [
    'entityid' => 'http://login.aai.braindrops.org/adfs/services/trust',
    'description' => [
        'nl' => 'SURFdropjes ADFS',
        'en' => 'SURFdropjes ADFS',
    ],
    'OrganizationName' => [
        'nl' => 'SURFdropjes ADFS',
        'en' => 'SURFdropjes ADFS',
    ],
    'name' => [
        'nl' => 'SURFdrops ADFS IdP',
        'en' => 'SURFdrops ADFS IdP',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'SURFdropjes ADFS',
        'en' => 'SURFdropjes ADFS',
    ],
    'url' => [
        'nl' => 'https://beta.surfnet.nl/',
        'en' => 'https://beta.surfnet.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://beta.surfnet.nl/',
        'en' => 'https://beta.surfnet.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/d71099a0d4315a5816c6c792a2602be1',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'braindrops.nl',
        'surfnet.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFdrops ADFS IdP',
            'en' => 'SURFdrops ADFS IdP',
        ],
        'Description' => [
            'nl' => 'SURFdrops ADFS IdP',
            'en' => 'SURFdrops ADFS IdP',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFdrops',
                'ADFS',
                'IdP',
                'dropjes',
            ],
            'nl' => [
                'SURFdrops',
                'ADFS',
                'IdP',
                'dropjes',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/SURFdropsADFS.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/ea88d832-15d0-4450-9dff-d24b21a3826d/'] = [
    'entityid' => 'https://sts.windows.net/ea88d832-15d0-4450-9dff-d24b21a3826d/',
    'description' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'OrganizationName' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'name' => [
        'nl' => 'De Haagse Hogeschool (HHS) (Azure AD test)',
        'en' => 'The Hague University of Applied Science (THUAS) (Azure AD test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'url' => [
        'nl' => 'https://www.dehaagsehogeschool.nl/',
        'en' => 'https://www.dehaagsehogeschool.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.dehaagsehogeschool.nl/',
        'en' => 'https://www.dehaagsehogeschool.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/03f482dcabd11b472477a9f8a87c63d4',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'hhs.nl',
        'student.hhs.nl',
        'tst.hhs.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'De Haagse Hogeschool (HHS) (Azure AD test)',
            'en' => 'The Hague University of Applied Science (THUAS) (Azure AD test)',
        ],
        'Description' => [
            'nl' => 'De Haagse Hogeschool (HHS) (Azure AD test)',
            'en' => 'The Hague University of Applied Science (THUAS) (Azure AD test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Haagse',
                'Hogeschool',
                'hhs',
                'Hague',
                'thuas',
            ],
            'nl' => [
                'Haagse',
                'Hogeschool',
                'hhs',
                'Hague',
                'thuas',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hhs.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://teamwerk.tfed.vumc.nl/adfs/services/trust'] = [
    'entityid' => 'http://teamwerk.tfed.vumc.nl/adfs/services/trust',
    'description' => [
        'nl' => 'VUmc',
        'en' => 'VUmc',
    ],
    'OrganizationName' => [
        'nl' => 'VUmc',
        'en' => 'VUmc',
    ],
    'name' => [
        'nl' => 'VU medisch centrum (test)',
        'en' => 'VU medisch centrum (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'VU medisch centrum',
        'en' => 'VU University Medical Center',
    ],
    'url' => [
        'nl' => 'http://www.vumc.nl/',
        'en' => 'http://www.vumc.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.vumc.nl/',
        'en' => 'http://www.vumc.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/843691b80f551f52bc807c4fea62b83a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'VUmc.nl',
        'acc01.vumc.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'VU medisch centrum (test)',
            'en' => 'VU medisch centrum (test)',
        ],
        'Description' => [
            'nl' => 'VUmc (test)',
            'en' => 'VUmc (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'vumc',
                'vrije',
                'universiteit',
                'medisch',
                'centrum',
            ],
            'nl' => [
                'vumc',
                'vrije',
                'universiteit',
                'medisch',
                'centrum',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/vumc.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://idp.un-ihe-test.org/adfs/services/trust'] = [
    'entityid' => 'http://idp.un-ihe-test.org/adfs/services/trust',
    'description' => [
        'nl' => 'UNESCO-IHE Institute for Water Education (test)',
        'en' => 'UNESCO-IHE Institute for Water Education (test)',
    ],
    'OrganizationName' => [
        'nl' => 'UNESCO-IHE Institute for Water Education (test)',
        'en' => 'UNESCO-IHE Institute for Water Education (test)',
    ],
    'name' => [
        'nl' => 'IHE Delft Institute for Water Education (test)',
        'en' => 'IHE Delft Institute for Water Education (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'UNESCO-IHE Institute for Water Education (test)',
        'en' => 'UNESCO-IHE Institute for Water Education (test)',
    ],
    'url' => [
        'nl' => 'http://www.unesco-ihe.org/',
        'en' => 'http://www.unesco-ihe.org/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.unesco-ihe.org/',
        'en' => 'http://www.unesco-ihe.org/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/d3882e171407daf14a5726246d7f767b',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'unesco-ihe.org',
        'education.ihe.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'IHE Delft Institute for Water Education (test)',
            'en' => 'IHE Delft Institute for Water Education (test)',
        ],
        'Description' => [
            'nl' => 'IHE Delft Institute for Water Education (test)',
            'en' => 'IHE Delft Institute for Water Education (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Research',
                'IHE',
                'UNESCO-IHE',
                'Institute',
                'for',
                'Water',
                'Education',
            ],
            'nl' => [
                'Research',
                'IHE',
                'UNESCO-IHE',
                'Institute',
                'for',
                'Water',
                'Education',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/unesco-ihe.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.acc.uu.nl/nidp/saml2/metadata'] = [
    'entityid' => 'https://login.acc.uu.nl/nidp/saml2/metadata',
    'description' => [
        'nl' => 'Universiteit Utrecht',
        'en' => 'Utrecht University',
    ],
    'OrganizationName' => [
        'nl' => 'Universiteit Utrecht',
        'en' => 'Utrecht University',
    ],
    'name' => [
        'nl' => 'Universiteit Utrecht (Acceptatie)',
        'en' => 'Utrecht University (Staging)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Universiteit Utrecht',
        'en' => 'Utrecht University',
    ],
    'url' => [
        'nl' => 'http://www.uu.nl/',
        'en' => 'http://www.uu.nl/en',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.uu.nl/',
        'en' => 'http://www.uu.nl/en',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/9f4f5cd93085d22f30fb4f9c514c529c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'soliscom.uu.nl',
        'uu.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universiteit Utrecht (Acceptatie)',
            'en' => 'Utrecht University (Staging)',
        ],
        'Description' => [
            'nl' => 'Universiteit Utrecht (Acceptatie)',
            'en' => 'Universiteit Utrecht (Staging)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'uu',
                'universiteit',
                'utrecht',
                'solis',
            ],
            'nl' => [
                'utrecht',
                'university',
                'uu',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/uu.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.uaccess-d.leidenuniv.nl/nidp/saml2/metadata'] = [
    'entityid' => 'https://login.uaccess-d.leidenuniv.nl/nidp/saml2/metadata',
    'description' => [
        'en' => 'Universiteit Leiden',
    ],
    'OrganizationName' => [
        'en' => 'Universiteit Leiden',
    ],
    'name' => [
        'nl' => 'Universiteit Leiden Identity Server (Test)',
        'en' => 'Universiteit Leiden Identity Server (Test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Universiteit Leiden',
    ],
    'url' => [
        'en' => 'http://www.universiteitleiden.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.universiteitleiden.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/a372cbf80065f0c7caf405c2b3906d04',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'umail.leidenuniv.nl',
        'leidenuniv.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universiteit Leiden Identity Server (Test)',
            'en' => 'Universiteit Leiden Identity Server (Test)',
        ],
        'Description' => [
            'nl' => 'Universiteit Leiden (test)',
            'en' => 'Universiteit Leiden (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Universiteit',
                'Leiden',
                'UL',
                'RUL',
            ],
            'nl' => [
                'Universiteit',
                'Leiden',
                'UL',
                'RUL',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/leiden.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://idp.prolocation.net/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idp.prolocation.net/simplesaml/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/bd80a4c3e21e83ff70a656266f2ef899',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'prolocation.net',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Prolocation test IdP',
            'en' => 'Prolocation test IdP',
        ],
        'Description' => [
            'nl' => 'Prolocation test IdP',
            'en' => 'An IdP operated by Prolocation',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Prolocation',
            ],
            'nl' => [
                'Prolocation',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/prolo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Prolocation test IdP',
        'en' => 'Prolocation test IdP',
    ],
];
$metadata['https://sts.windows.net/611ad76e-167b-451f-a313-e8d68912f87b/'] = [
    'entityid' => 'https://sts.windows.net/611ad76e-167b-451f-a313-e8d68912f87b/',
    'description' => [
        'en' => 'Zuyd Hogeschool',
    ],
    'OrganizationName' => [
        'en' => 'Zuyd Hogeschool',
    ],
    'name' => [
        'en' => 'Zuyd Hogeschool',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Zuyd Hogeschool',
    ],
    'url' => [
        'en' => 'http://www.zuyd.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.zuyd.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0803fc969586c8fed837c2ea5188341c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'zuyd.nl',
        'hszuyd.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Hogeschool Zuyd (Test - Microsoft Azure)',
            'en' => 'Hogeschool Zuyd (Test - Microsoft Azure)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Zuyd',
                'Hogeschool',
            ],
            'nl' => [
                'Zuyd',
                'Hogeschool',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hszuyd.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://mock-idp'] = [
    'entityid' => 'http://mock-idp',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/234353ee1e96b88f9fa5f488a235982b',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFconext Mujina IDP (Mock-IdP)',
            'en' => 'SURFconext Mujina IDP (Mock-IdP)',
        ],
        'Description' => [
            'nl' => 'SURFconext Mujina Test Identity Provider',
            'en' => 'SURFconext Mujina Test Identity Provider',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'mock',
                'idp',
                'mujina',
            ],
            'nl' => [
                'mock',
                'idp',
                'mujina',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.test.surfconext.nl/media/conext_logo.png',
                'height' => 96,
                'width' => 96,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SURFconext Mujina IDP (Mock-IdP)',
        'en' => 'SURFconext Mujina IDP (Mock-IdP)',
    ],
];
$metadata['http://sts-tst.hhs.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts-tst.hhs.nl/adfs/services/trust',
    'description' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'OrganizationName' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'name' => [
        'nl' => 'De Haagse Hogeschool (HHS) (test)',
        'en' => 'The Hague University of Applied Science (THUAS) (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'url' => [
        'nl' => 'https://www.dehaagsehogeschool.nl/',
        'en' => 'https://www.dehaagsehogeschool.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.dehaagsehogeschool.nl/',
        'en' => 'https://www.dehaagsehogeschool.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/cee9ae52a6adf21df4b80790ac92c57c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'hhs.nl',
        'student.hhs.nl',
        'tst.hhs.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'De Haagse Hogeschool (HHS) (test)',
            'en' => 'The Hague University of Applied Science (THUAS) (test)',
        ],
        'Description' => [
            'nl' => 'De Haagse Hogeschool (HHS) (test)',
            'en' => 'The Hague University of Applied Science (THUAS) (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Haagse',
                'Hogeschool',
                'hhs',
                'Hague',
                'thuas',
            ],
            'nl' => [
                'Haagse',
                'Hogeschool',
                'hhs',
                'Hague',
                'thuas',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hhs.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://fedlogin.awo.ou.nl/fedou/saml2/idp/metadata.php'] = [
    'entityid' => 'https://fedlogin.awo.ou.nl/fedou/saml2/idp/metadata.php',
    'description' => [
        'en' => 'Open Universiteit, NOHI/SchakelZone/OJH',
    ],
    'OrganizationName' => [
        'en' => 'Open Universiteit, NOHI/SchakelZone/OJH',
    ],
    'name' => [
        'nl' => 'Open Juridische hogeschool, Netwerk Open Hogeschool Informatica, SchakelZone OJH NOHI (Acceptatie - SHA256)',
        'en' => 'Open Juridische hogeschool, Netwerk Open Hogeschool Informatica, SchakelZone OJH NOHI (Acceptatie - SHA256)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Open Universiteit, NOHI/SchakelZone/OJH',
    ],
    'url' => [
        'en' => 'https://www.ou.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.ou.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/3dcc9cbf1c02ec3b26057bbff4da2a3e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Open Juridische hogeschool, Netwerk Open Hogeschool Informatica, SchakelZone OJH NOHI (Acceptatie - SHA256)',
            'en' => 'Open Juridische hogeschool, Netwerk Open Hogeschool Informatica, SchakelZone OJH NOHI (Acceptatie - SHA256)',
        ],
        'Description' => [
            'nl' => 'An IdP operated by the Open Universiteit for NOHI/OJH/Schakelzone (Acceptatie - SHA256)',
            'en' => 'An IdP operated by the Open Universiteit for NOHI/OJH/Schakelzone',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'open',
                'universiteit',
                'ou',
                'nohi',
                'ojh',
                'schakelzone',
            ],
            'nl' => [
                'open',
                'universiteit',
                'ou',
                'nohi',
                'ojh',
                'schakelzone',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/schakelzone.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://login.eduid.nl'] = [
    'entityid' => 'https://login.eduid.nl',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/2199f10a9453ddc850997d3c2c4f6008',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'eduID',
            'en' => 'eduID',
        ],
        'Description' => [
            'nl' => 'eduID IdP production omgeving',
            'en' => 'eduID IdP production environment',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/eduid.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'eduID',
        'en' => 'eduID',
    ],
];
$metadata['https://eduid.pilot.eduid.nl/saml/metadata.xml'] = [
    'entityid' => 'https://eduid.pilot.eduid.nl/saml/metadata.xml',
    'description' => [
        'en' => 'EduID IDP',
    ],
    'OrganizationName' => [
        'en' => 'EduID IDP',
    ],
    'name' => [
        'en' => 'EduID Identity Provider',
    ],
    'OrganizationDisplayName' => [
        'en' => 'EduID Identity Provider',
    ],
    'url' => [
        'en' => 'https://eduid.pilot.eduid.nl',
    ],
    'OrganizationURL' => [
        'en' => 'https://eduid.pilot.eduid.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/8dbfe103b6211d52d3d1ce930a297fe1',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/surfnet.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://federatie.test.radboudumc.nl/adfs/services/trust'] = [
    'entityid' => 'http://federatie.test.radboudumc.nl/adfs/services/trust',
    'description' => [
        'en' => 'Radboudumc',
    ],
    'OrganizationName' => [
        'en' => 'Radboudumc',
    ],
    'name' => [
        'nl' => 'Radboudumc [ADFS Test]',
        'en' => 'Radboudumc [ADFS Test]',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Radboudumc',
    ],
    'url' => [
        'en' => 'http://www.umcn.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.umcn.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/ec34927a780930ad1a3b2a19e6f3c101',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'umcn.nl',
        'radboudumc.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Radboudumc [ADFS Test]',
            'en' => 'Radboudumc [ADFS Test]',
        ],
        'Description' => [
            'nl' => 'Radboudumc [ADFS Test]',
            'en' => 'Radboudumc [ADFS Test]',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Radboud',
                'umc',
                'test',
                'umcn',
            ],
            'nl' => [
                'Radboud',
                'umc',
                'test',
                'umcn',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/Radboudumc.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://federation.exp.duo.nl/adfs/services/trust'] = [
    'entityid' => 'http://federation.exp.duo.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Dienst Uitvoering Onderwijs',
        'en' => 'Dienst Uitvoering Onderwijs',
    ],
    'OrganizationName' => [
        'nl' => 'Dienst Uitvoering Onderwijs',
        'en' => 'Dienst Uitvoering Onderwijs',
    ],
    'name' => [
        'nl' => 'Dienst Uitvoering Onderwijs (test)',
        'en' => 'Dienst Uitvoering Onderwijs (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Dienst Uitvoering Onderwijs',
        'en' => 'Dienst Uitvoering Onderwijs',
    ],
    'url' => [
        'nl' => 'https://www.duo.nl',
        'en' => 'https://www.duo.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.duo.nl',
        'en' => 'https://www.duo.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/2d9b1b98c0dfa97810e347216107ef50',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'duo.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Dienst Uitvoering Onderwijs (test)',
            'en' => 'Dienst Uitvoering Onderwijs (test)',
        ],
        'Description' => [
            'nl' => 'Dienst Uitvoering Onderwijs (test)',
            'en' => 'Dienst Uitvoering Onderwijs (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'dienst',
                'uitvoering',
                'onderwijs',
                'duo',
            ],
            'nl' => [
                'dienst',
                'uitvoering',
                'onderwijs',
                'duo',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/duo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://idp.catharijnecollege.nl/simplesamlphp/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idp.catharijnecollege.nl/simplesamlphp/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/c382645f0a253f9771f21628ba316585',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'catharijnecollege.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Catharijnecollege (Stuk, niet gebruiken)',
            'en' => 'Catharijnecollege (Broken, Do not use)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'catharine',
                'college',
                '365',
            ],
            'nl' => [
                'catharine',
                'college',
                '365',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/catharijne.gif',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/079742f4-b5bf-4371-b19a-af97315604d3/'] = [
    'entityid' => 'https://sts.windows.net/079742f4-b5bf-4371-b19a-af97315604d3/',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/f173052b1a9ab3606b021c1a1350828b',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Azure AD IDP for fictional Hartingcollege | Test',
            'en' => 'Azure AD IDP for fictional Hartingcollege | Test',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'azure',
                'harting',
                'college',
                'test',
            ],
            'nl' => [
                'azure',
                'harting',
                'college',
                'test',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/edugroepen.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://engine.surfconext.nl/authentication/idp/metadata'] = [
    'entityid' => 'https://engine.surfconext.nl/authentication/idp/metadata',
    'description' => [
        'en' => 'SURFnet BV',
    ],
    'OrganizationName' => [
        'en' => 'SURFnet BV',
    ],
    'name' => [
        'en' => 'SURFnet',
    ],
    'OrganizationDisplayName' => [
        'en' => 'SURFnet',
    ],
    'url' => [
        'en' => 'http://www.surfnet.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.surfnet.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/75681424e34ca7710fa9a3bf0b398bd2',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'SURFconext',
            'en' => 'SURFconext',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFconext',
                'engine',
            ],
            'nl' => [
                'SURFconext',
                'engine',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/surfconext.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://acc-login.uva.nl/adfs/services/trust'] = [
    'entityid' => 'http://acc-login.uva.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Universiteit van Amsterdam',
        'en' => 'Universiteit van Amsterdam',
    ],
    'OrganizationName' => [
        'nl' => 'Universiteit van Amsterdam',
        'en' => 'Universiteit van Amsterdam',
    ],
    'name' => [
        'nl' => 'Universiteit van Amsterdam (staging)',
        'en' => 'Universiteit van Amsterdam (staging)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Universiteit van Amsterdam',
        'en' => 'Universiteit van Amsterdam',
    ],
    'url' => [
        'nl' => 'http://www.uva.nl',
        'en' => 'http://www.uva.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.uva.nl',
        'en' => 'http://www.uva.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/6c42f91167e87946b617f486c2ddbc8e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'uva.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universiteit van Amsterdam (staging)',
            'en' => 'Universiteit van Amsterdam (staging)',
        ],
        'Description' => [
            'nl' => 'Universiteit van Amsterdam (staging)',
            'en' => 'Universiteit van Amsterdam (staging)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'university',
                'of',
                'amsterdam',
                'universiteit',
                'van',
                'amsterdam',
                'uva',
            ],
            'nl' => [
                'university',
                'of',
                'amsterdam',
                'universiteit',
                'van',
                'amsterdam',
                'uva',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/uva.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://idp.issuer.test.ssi.lab.surf.nl/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idp.issuer.test.ssi.lab.surf.nl/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/7d804fb0d9119f764c8c13785b5aba02',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SSI lab PoC',
            'en' => 'SSI lab PoC',
        ],
        'Description' => [
            'nl' => 'SSI lab PoC',
            'en' => 'SSI lab PoC',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'ssi',
                'lab',
                'poc',
            ],
            'nl' => [
                'ssi',
                'lab',
                'poc',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/surfconext.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SSI lab PoC',
        'en' => 'SSI lab PoC',
    ],
];
$metadata['https://idp.surfnet.nl'] = [
    'entityid' => 'https://idp.surfnet.nl',
    'description' => [
        'nl' => 'SURFnet bv',
        'en' => 'SURFnet bv',
    ],
    'OrganizationName' => [
        'nl' => 'SURFnet bv',
        'en' => 'SURFnet bv',
    ],
    'name' => [
        'nl' => 'SURFnet bv',
        'en' => 'SURFnet bv',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'SURFnet bv',
        'en' => 'SURFnet bv',
    ],
    'url' => [
        'nl' => 'http://www.surfnet.nl',
        'en' => 'https://www.surfnet.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.surfnet.nl',
        'en' => 'https://www.surfnet.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/ba573f07093978e3852ddef0d2465b84',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'SURFnet bv',
            'en' => 'SURFnet bv',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/surfnet.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['test-idp.lab.surf.nl'] = [
    'entityid' => 'test-idp.lab.surf.nl',
    'description' => [
        'nl' => 'SURF',
        'en' => 'SURF',
    ],
    'OrganizationName' => [
        'nl' => 'SURF',
        'en' => 'SURF',
    ],
    'name' => [
        'nl' => 'SURF* Test IdP',
        'en' => 'SURF* Test IdP',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'SURF',
        'en' => 'SURF',
    ],
    'url' => [
        'nl' => 'https://surf.nl',
        'en' => 'https://surf.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'https://surf.nl',
        'en' => 'https://surf.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/062f1b2c974b21bb653fe1efcdb5f67e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURF* Test IdP',
            'en' => 'SURF* Test IdP',
        ],
        'Description' => [
            'nl' => 'Een Test-IdP waar SURF*-werknemers kunnen inloggen met een x509 clientcertifcaat',
            'en' => 'A test-IdP in which SURF employees can log on using an x509 client certificate',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/surf.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://adfstest.iselinge.nl/adfs/services/trust'] = [
    'entityid' => 'https://adfstest.iselinge.nl/adfs/services/trust',
    'description' => [
        'en' => 'Iselinge university of applied sciences',
    ],
    'OrganizationName' => [
        'en' => 'Iselinge university of applied sciences',
    ],
    'name' => [
        'nl' => 'Iselinge Hogeschool (test)',
        'en' => 'Iselinge university of applied sciences (test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Iselinge university of applied sciences',
    ],
    'url' => [
        'en' => 'https://www.iselinge.nl',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.iselinge.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/6115dee823cd0f7b7f43880265b9aa09',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'iselinge.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Iselinge Hogeschool (test)',
            'en' => 'Iselinge university of applied sciences (test)',
        ],
        'Description' => [
            'nl' => 'Iselinge Hogeschool (test)',
            'en' => 'Iselinge university of applied sciences (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Iselinge',
                'Hogeschool',
            ],
            'nl' => [
                'Iselinge',
                'Hogeschool',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/iselinge.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://fs.myhzdev.nl/adfs/services/trust'] = [
    'entityid' => 'http://fs.myhzdev.nl/adfs/services/trust',
    'description' => [
        'nl' => 'HZ University of Applied Sciences (Ontwikkel)',
        'en' => 'HZ University of Applied Sciences (Development)',
    ],
    'OrganizationName' => [
        'nl' => 'HZ University of Applied Sciences (Ontwikkel)',
        'en' => 'HZ University of Applied Sciences (Development)',
    ],
    'name' => [
        'nl' => 'HZ University of Applied Sciences (Ontwikkel)',
        'en' => 'HZ University of Applied Sciences (Development)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'HZ University of Applied Sciences (Ontwikkel)',
        'en' => 'HZ University of Applied Sciences (Development)',
    ],
    'url' => [
        'nl' => 'http://www.hz.nl',
        'en' => 'http://www.hz.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.hz.nl',
        'en' => 'http://www.hz.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/811e81bfe2c831b259310893895a387a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'hz.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'HZ University of Applied Sciences (Ontwikkel)',
            'en' => 'HZ University of Applied Sciences (Development)',
        ],
        'Description' => [
            'nl' => 'HZ University of Applied Sciences (Ontwikkel)',
            'en' => 'HZ University of Applied Sciences (Development)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'Zeeland',
                'HZ',
                'University',
                'of',
                'Applied',
                'Sciences',
                'HBO',
                'myhz',
            ],
            'nl' => [
                'Hogeschool',
                'Zeeland',
                'HZ',
                'University',
                'of',
                'Applied',
                'Sciences',
                'HBO',
                'myhz',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hzeeland.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/5d73e7b7-b3e1-4d00-b303-056140b2a3b4/'] = [
    'entityid' => 'https://sts.windows.net/5d73e7b7-b3e1-4d00-b303-056140b2a3b4/',
    'description' => [
        'nl' => 'Hogeschool van Arnhem en Nijmegen',
        'en' => 'HAN University of Applied Sciences',
    ],
    'OrganizationName' => [
        'nl' => 'Hogeschool van Arnhem en Nijmegen',
        'en' => 'HAN University of Applied Sciences',
    ],
    'name' => [
        'nl' => 'Hogeschool van Arnhem en Nijmegen (Azure)',
        'en' => 'HAN University of Applied Sciences (Azure)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Hogeschool van Arnhem en Nijmegen',
        'en' => 'HAN University of Applied Sciences',
    ],
    'url' => [
        'nl' => 'http://www.han.nl',
        'en' => 'http://www.han.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.han.nl',
        'en' => 'http://www.han.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/54839a587d9876d2da0892a7ee3702ca',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Hogeschool van Arnhem en Nijmegen (Azure)',
            'en' => 'HAN University of Applied Sciences (Azure)',
        ],
        'Description' => [
            'nl' => 'Hogeschool van Arnhem en Nijmegen (Azure)',
            'en' => 'HAN University of Applied Sciences (Azure)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'han',
                'University',
                'of',
                'Applied',
                'Sciences',
                'Hogeschool',
                'van',
                'Arnhem',
                'en',
                'Nijmegen',
                'HBO',
            ],
            'nl' => [
                'han',
                'University',
                'of',
                'Applied',
                'Sciences',
                'Hogeschool',
                'van',
                'Arnhem',
                'en',
                'Nijmegen',
                'HBO',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/han.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://acc-login.hva.nl/adfs/services/trust'] = [
    'entityid' => 'http://acc-login.hva.nl/adfs/services/trust',
    'description' => [
        'en' => 'Hogeschool van Amsterdam',
    ],
    'OrganizationName' => [
        'en' => 'Hogeschool van Amsterdam',
    ],
    'name' => [
        'nl' => 'Hogeschool van Amsterdam (acceptatie)',
        'en' => 'Hogeschool van Amsterdam (staging)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Hogeschool van Amsterdam',
    ],
    'url' => [
        'en' => 'http://www.surffederatie.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.surffederatie.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/3e675abe1f767ec6be1981a934438005',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'hva.nl',
        'acc.hva.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Hogeschool van Amsterdam (acceptatie)',
            'en' => 'Hogeschool van Amsterdam (staging)',
        ],
        'Description' => [
            'nl' => 'Hogeschool van Amsterdam (acceptatie)',
            'en' => 'Hogeschool van Amsterdam (staging)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'van',
                'Amsterdam',
                'staging',
            ],
            'nl' => [
                'Hogeschool',
                'van',
                'Amsterdam',
                'acceptatie',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/hva.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://sts.test.tue.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts.test.tue.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/65966684204496c20f87e95ca362c3dd',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Technische Universiteit Eindhoven (test)',
            'en' => 'Eindhoven University of Technology (test)',
        ],
        'Description' => [
            'nl' => 'Technische Universiteit Eindhoven (test)',
            'en' => 'Eindhoven University of Technology (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Eindhoven',
                'University',
                'of',
                'Technology',
            ],
            'nl' => [
                'Technische',
                'Universiteit',
                'Eindhoven',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/tue.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Technische Universiteit Eindhoven (test)',
        'en' => 'Eindhoven University of Technology (test)',
    ],
];
$metadata['https://sts.windows.net/50e03ab7-7376-4571-98ba-fe4e488bac41/'] = [
    'entityid' => 'https://sts.windows.net/50e03ab7-7376-4571-98ba-fe4e488bac41/',
    'description' => [
        'nl' => 'Onderwijsgroep Tilburg',
        'en' => 'Onderwijsgroep Tilburg',
    ],
    'OrganizationName' => [
        'nl' => 'Onderwijsgroep Tilburg',
        'en' => 'Onderwijsgroep Tilburg',
    ],
    'name' => [
        'nl' => 'Onderwijsgroep Tilburg (test)',
        'en' => 'Onderwijsgroep Tilburg (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Onderwijsgroep Tilburg',
        'en' => 'Onderwijsgroep Tilburg',
    ],
    'url' => [
        'nl' => 'http://www.onderwijsgroeptilburg.nl/',
        'en' => 'http://www.onderwijsgroeptilburg.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.onderwijsgroeptilburg.nl/',
        'en' => 'http://www.onderwijsgroeptilburg.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/929c6678fb3cb32d4c9ceaa9492e5310',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'onderwijsgroeptilburg.nl',
        'ogt013.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Onderwijsgroep Tilburg (test)',
            'en' => 'Onderwijsgroep Tilburg (test)',
        ],
        'Description' => [
            'nl' => 'Onderwijsgroep Tilburg (test)',
            'en' => 'Onderwijsgroep Tilburg (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Onderwijsgroep',
                'Tilburg,',
                'ROC',
                'Tilburg,',
                'Campus',
                '013,',
                'Entreecollege',
                'Tilburg,',
                'NCVB',
                'Bedrijfsopleidingen,',
                'Vakcollege',
                'Tilburg',
            ],
            'nl' => [
                'Onderwijsgroep',
                'Tilburg,',
                'ROC',
                'Tilburg,',
                'Campus',
                '013,',
                'Entreecollege',
                'Tilburg,',
                'NCVB',
                'Bedrijfsopleidingen,',
                'Vakcollege',
                'Tilburg',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/onderwijsgroep-tilburg.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/76fd1191-d586-4fe3-8242-c0b1bba18f4f/'] = [
    'entityid' => 'https://sts.windows.net/76fd1191-d586-4fe3-8242-c0b1bba18f4f/',
    'description' => [
        'en' => 'ROC Ter AA',
    ],
    'OrganizationName' => [
        'en' => 'ROC Ter AA',
    ],
    'name' => [
        'nl' => 'ROC Ter AA (test)',
        'en' => 'ROC Ter AA (test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'ROC Ter AA',
    ],
    'url' => [
        'en' => 'https://roc-teraa.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'https://roc-teraa.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/e7ded6e34f3bd96b4abba2234e99fd5d',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'roc-teraa.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Ter AA (test)',
            'en' => 'ROC Ter AA (test)',
        ],
        'Description' => [
            'nl' => 'ROC Ter AA (test)',
            'en' => 'ROC Ter AA (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'roc',
                'ter',
                'aa',
                'rocteraa',
            ],
            'nl' => [
                'roc',
                'ter',
                'aa',
                'rocteraa',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/roc-ter-aa.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://adfs2.hse.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs2.hse.nl/adfs/services/trust',
    'description' => [
        'en' => 'Fontys Hogescholen',
    ],
    'OrganizationName' => [
        'en' => 'Fontys Hogescholen',
    ],
    'name' => [
        'nl' => 'Fontys Hogescholen (test)',
        'en' => 'Fontys Hogescholen (test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Fontys Hogescholen',
    ],
    'url' => [
        'en' => 'http://fontys.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://fontys.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/aef85de034888b2f28635cd3797026e9',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'fontys.nl',
        'hse.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Fontys Hogescholen (test)',
            'en' => 'Fontys Hogescholen (test)',
        ],
        'Description' => [
            'nl' => 'Fontys Hogescholen (test)',
            'en' => 'Fontys Hogescholen (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Fontys',
                'Hogescholen',
                '(test)',
            ],
            'nl' => [
                'Fontys',
                'Hogescholen',
                '(test)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/fontys.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://idp-test.surfcumulus.nl/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idp-test.surfcumulus.nl/simplesaml/saml2/idp/metadata.php',
    'description' => [
        'nl' => 'SURFcumulus Test IdP',
        'en' => 'SURFcumulus Test IdP',
    ],
    'OrganizationName' => [
        'nl' => 'SURFcumulus Test IdP',
        'en' => 'SURFcumulus Test IdP',
    ],
    'name' => [
        'nl' => 'SURFcumulus Test IdP',
        'en' => 'SURFcumulus Test IdP',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'SURFcumulus Test IdP',
        'en' => 'SURFcumulus Test IdP',
    ],
    'url' => [
        'nl' => 'https://surfcumulus.nl',
        'en' => 'https://surfnet.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'https://surfcumulus.nl',
        'en' => 'https://surfnet.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/632271624f7185e1305b0bb168ef3776',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFcumulus Test IdP',
            'en' => 'SURFcumulus Test IdP',
        ],
        'Description' => [
            'nl' => 'SURFcumulus Test IdP',
            'en' => 'SURFcumulus Test IdP',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFcumulus',
                'Test',
                'IdP',
            ],
            'nl' => [
                'SURFcumulus',
                'Test',
                'IdP',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/SURFnetdienst.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/850f9344-e078-467e-9c5e-84d82f208ac7/'] = [
    'entityid' => 'https://sts.windows.net/850f9344-e078-467e-9c5e-84d82f208ac7/',
    'description' => [
        'en' => 'Hogeschool Leiden',
    ],
    'OrganizationName' => [
        'en' => 'Hogeschool Leiden',
    ],
    'name' => [
        'nl' => 'Hogeschool Leiden (Test)',
        'en' => 'University of Applied Sciences Leiden (Test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Hogeschool Leiden',
    ],
    'url' => [
        'en' => 'http://www.hsleiden.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.hsleiden.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/d2b1d4a5683d29a944ecf4ebec32b531',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'hsleiden.nl',
        'student.hsleiden.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Hogeschool Leiden (Test)',
            'en' => 'University of Applied Sciences Leiden (Test)',
        ],
        'Description' => [
            'nl' => 'Hogeschool Leiden (Test)',
            'en' => 'University of Applied Sciences Leiden (Test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'university',
                'of',
                'applied',
                'sciences',
                'leiden',
                'hogeschool',
                'hsleiden',
                'hbo',
            ],
            'nl' => [
                'university',
                'of',
                'applied',
                'sciences',
                'leiden',
                'hogeschool',
                'hsleiden',
                'hbo',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hsleiden.gif',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://teamwerk.fed.vumc.nl/adfs/services/trust'] = [
    'entityid' => 'http://teamwerk.fed.vumc.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/531dc454bd0de7d51772c53be70750fe',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'VUmc (test)',
            'en' => 'VUmc (test)',
        ],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/vumc.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'VUmc (test)',
        'en' => 'VUmc (test)',
    ],
];
$metadata['https://sts.windows.net/f1ec8743-cb11-40ae-982a-45e321af98b4/'] = [
    'entityid' => 'https://sts.windows.net/f1ec8743-cb11-40ae-982a-45e321af98b4/',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/650671e96dfb548fe63ff5ab6844687e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Universiteit Twente (Test Azure)',
            'en' => 'Universiteit of  Twente (Test Azure)',
        ],
        'Description' => [
            'nl' => 'Universiteit Twente (Test Azure)',
            'en' => 'Universiteit of  Twente (Test Azure)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'University',
                'of',
                'Twente',
                'Universiteit',
                'Twente',
                'ut',
                'utwente',
            ],
            'nl' => [
                'University',
                'of',
                'Twente',
                'Universiteit',
                'Twente',
                'ut',
                'utwente',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/utwente_test.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Universiteit Twente (Test Azure)',
        'en' => 'Universiteit of  Twente (Test Azure)',
    ],
];
$metadata['https://sts.windows.net/0fd5b548-a3ae-476f-886f-0df40c197293/'] = [
    'entityid' => 'https://sts.windows.net/0fd5b548-a3ae-476f-886f-0df40c197293/',
    'description' => [
        'nl' => 'Christelijke Hogeschool Ede (CHE, TEST)',
        'en' => 'Christian University of Applied Sciences',
    ],
    'OrganizationName' => [
        'nl' => 'Christelijke Hogeschool Ede (CHE, TEST)',
        'en' => 'Christian University of Applied Sciences',
    ],
    'name' => [
        'nl' => 'Christelijke Hogeschool Ede (CHE, TEST)',
        'en' => 'Christian University of Applied Sciences (CHE, TEST)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Christelijke Hogeschool Ede (CHE, TEST)',
        'en' => 'Christian University of Applied Sciences (CHE, TEST)',
    ],
    'url' => [
        'nl' => 'https://www.che.n',
        'en' => 'https://www.che.nl/en',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.che.n',
        'en' => 'https://www.che.nl/en',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/659509074d680bf0c7dcd80c555e04d9',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'che.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Christelijke Hogeschool Ede (CHE, TEST)',
            'en' => 'Christian University of Applied Sciences (CHE, TEST)',
        ],
        'Description' => [
            'nl' => 'Christelijke Hogeschool Ede (CHE, TEST)',
            'en' => 'Christian University of Applied Sciences (CHE, TEST)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Christelijke',
                'Hogeschool',
                'Ede',
                '(CHE,',
                'TEST)',
                'Christian',
                'University',
                'of',
                'Applied',
                'Sciences',
            ],
            'nl' => [
                'Christelijke',
                'Hogeschool',
                'Ede',
                '(CHE,',
                'TEST)',
                'Christian',
                'University',
                'of',
                'Applied',
                'Sciences',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/che.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/9a1651bf-58af-435b-86a8-3e9334b4b732/'] = [
    'entityid' => 'https://sts.windows.net/9a1651bf-58af-435b-86a8-3e9334b4b732/',
    'description' => [
        'nl' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ)',
        'en' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ)',
    ],
    'OrganizationName' => [
        'nl' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ)',
        'en' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ)',
    ],
    'name' => [
        'nl' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ) (Azure AD)',
        'en' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ) (Azure AD)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ)',
        'en' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ)',
    ],
    'url' => [
        'nl' => 'http://www.nioz.nl/',
        'en' => 'http://www.nioz.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.nioz.nl/',
        'en' => 'http://www.nioz.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/cd5636ea8263f6d400f63b7f8c441449',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'nioz.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ) (Azure AD)',
            'en' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ) (Azure AD)',
        ],
        'Description' => [
            'nl' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ) (Azure AD)',
            'en' => 'Koninklijk Nederlands Instituut voor Onderzoek der Zee (NIOZ) (Azure AD)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Koninklijk',
                'Nederlands',
                'Instituut',
                'voor',
                'Onderzoek',
                'der',
                'Zee',
                '(NIOZ)',
            ],
            'nl' => [
                'Koninklijk',
                'Nederlands',
                'Instituut',
                'voor',
                'Onderzoek',
                'der',
                'Zee',
                '(NIOZ)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/nioz.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/f05ec392-a0f0-452e-b50e-55565b902148/'] = [
    'entityid' => 'https://sts.windows.net/f05ec392-a0f0-452e-b50e-55565b902148/',
    'description' => [
        'en' => 'Erasmus Universiteit Rotterdam',
    ],
    'OrganizationName' => [
        'en' => 'Erasmus Universiteit Rotterdam',
    ],
    'name' => [
        'nl' => 'Erasmus Universiteit Rotterdam (Azure AD)',
        'en' => 'Erasmus Universiteit Rotterdam (Azure AD)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Erasmus Universiteit Rotterdam',
    ],
    'url' => [
        'en' => 'http://www.eur.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.eur.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/b1eca0ba5a6e59f02277617a3bd6afb1',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'eur.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Erasmus Universiteit Rotterdam (Azure AD)',
            'en' => 'Erasmus Universiteit Rotterdam (Azure AD)',
        ],
        'Description' => [
            'nl' => 'Erasmus Universiteit Rotterdam (Azure AD)',
            'en' => 'Erasmus Universiteit Rotterdam (Azure AD)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Erasmus',
                'Universiteit',
                'Rotterdam',
                'Erasmus',
                'University',
                'Rotterdam',
                'EUR',
                'Test',
            ],
            'nl' => [
                'Erasmus',
                'Universiteit',
                'Rotterdam',
                'Erasmus',
                'University',
                'Rotterdam',
                'EUR',
                'Test',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/eur.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://adfs.mijnlentiz.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs.mijnlentiz.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Lentiz Onderwijsgroep',
        'en' => 'Lentiz Onderwijsgroep',
    ],
    'OrganizationName' => [
        'nl' => 'Lentiz Onderwijsgroep',
        'en' => 'Lentiz Onderwijsgroep',
    ],
    'name' => [
        'nl' => 'Lentiz Onderwijsgroep (nieuw)',
        'en' => 'Lentiz Onderwijsgroep (new)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Lentiz Onderwijsgroep',
        'en' => 'Lentiz Onderwijsgroep',
    ],
    'url' => [
        'nl' => 'https://www.lentiz.nl/home',
        'en' => 'https://www.lentiz.nl/home',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.lentiz.nl/home',
        'en' => 'https://www.lentiz.nl/home',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/9d687868eb8c4f34c4ce1dad39fe419a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'lentiz.nl',
        'student.lentiz.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Lentiz Onderwijsgroep (nieuw)',
            'en' => 'Lentiz Onderwijsgroep (new)',
        ],
        'Description' => [
            'nl' => 'Lentiz Onderwijsgroep (nieuw)',
            'en' => 'Lentiz Onderwijsgroep (new)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'lentiz',
                'onderwijsgroep',
            ],
            'nl' => [
                'lentiz',
                'onderwijsgroep',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/lentiz.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://irma.vetting-poc-idin.surfconext.nl/metadata'] = [
    'entityid' => 'https://irma.vetting-poc-idin.surfconext.nl/metadata',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/878ef77ccaaf4680282fe1b79718d71e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/dummy-idp.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://testadfs.knaw.nl/adfs/services/trust'] = [
    'entityid' => 'http://testadfs.knaw.nl/adfs/services/trust',
    'description' => [
        'en' => 'Koninklijke Nederlandse Akademie van Wetenschappen (KNAW)',
    ],
    'OrganizationName' => [
        'en' => 'Koninklijke Nederlandse Akademie van Wetenschappen (KNAW)',
    ],
    'name' => [
        'nl' => 'Koninklijke Nederlandse Akademie van  Wetenschappen (KNAW) [Test IdP]',
        'en' => 'Koninklijke Nederlandse Akademie van  Wetenschappen (KNAW) [Test IdP]',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Koninklijke Nederlandse Akademie van Wetenschappen (KNAW)',
    ],
    'url' => [
        'en' => 'http://www.knaw.nl',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.knaw.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/6d7e3cdf46b8f659a34ea8a83a22fe1b',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'knaw.nl',
        '.*\\.knaw\\.nl$',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Koninklijke Nederlandse Akademie van  Wetenschappen (KNAW) [Test IdP]',
            'en' => 'Koninklijke Nederlandse Akademie van  Wetenschappen (KNAW) [Test IdP]',
        ],
        'Description' => [
            'nl' => 'Koninklijke Nederlandse Akademie van  Wetenschappen (KNAW), centrale IdP  [Test IdP]',
            'en' => 'Koninklijke Nederlandse Akademie van  Wetenschappen (KNAW), central IdP  [Test IdP]',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'knaw',
                'bureau',
                'academie',
                'test',
            ],
            'nl' => [
                'knaw',
                'bureau',
                'academie',
                'test',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://testidp.knaw.nl/simplesaml/module.php/themeSURFnet/logo_testidp.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://login.surf.nl/adfs/services/trust'] = [
    'entityid' => 'http://login.surf.nl/adfs/services/trust',
    'description' => [
        'nl' => 'SURF b.v.',
        'en' => 'SURF b.v.',
    ],
    'OrganizationName' => [
        'nl' => 'SURF b.v.',
        'en' => 'SURF b.v.',
    ],
    'name' => [
        'nl' => 'SURF (Nieuw)',
        'en' => 'SURF (New)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'SURF (Nieuw)',
        'en' => 'SURF (New)',
    ],
    'url' => [
        'nl' => 'https://www.surf.nl',
        'en' => 'https://www.surf.nl/en',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.surf.nl',
        'en' => 'https://www.surf.nl/en',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/a59b0431c906c386c5c349b605aa0aae',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'SURF is de ICT-coöperatie van onderwijs en onderzoek in Nederland',
            'en' => 'SURF is the collaborative organisation for IT in Dutch education and research',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'surf',
                'bv',
                '1surf',
            ],
            'nl' => [
                'surf',
                'bv',
                '1surf',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/surf.svg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/2867a850-2fe5-43f7-92b9-8e326586b667/'] = [
    'entityid' => 'https://sts.windows.net/2867a850-2fe5-43f7-92b9-8e326586b667/',
    'description' => [
        'nl' => 'Deltion College',
        'en' => 'Deltion College',
    ],
    'OrganizationName' => [
        'nl' => 'Deltion College',
        'en' => 'Deltion College',
    ],
    'name' => [
        'nl' => 'Deltion College (Azure AD)',
        'en' => 'Deltion College (Azure AD)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Deltion College',
        'en' => 'Deltion College',
    ],
    'url' => [
        'nl' => 'http://www.deltion.nl/',
        'en' => 'http://www.deltion.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.deltion.nl/',
        'en' => 'http://www.deltion.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/edf4c3f708a32c0e634ad5efa6878b2d',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'deltion.nl',
        'st.deltion.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Deltion College (Azure AD)',
            'en' => 'Deltion College (Azure AD)',
        ],
        'Description' => [
            'nl' => 'Deltion College (Azure AD)',
            'en' => 'Deltion College (Azure AD)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'ROC',
                'MBO',
                'Zwolle',
                'Deltion',
                'College',
            ],
            'nl' => [
                'ROC',
                'MBO',
                'Zwolle',
                'Deltion',
                'College',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/deltion-companylogo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.otahu.nl/adfs/services/trust'] = [
    'entityid' => 'https://sts.otahu.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/f82d842c793e25d730186d159b32a25e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Hogeschool Utrecht (OTH ADFS)',
            'en' => 'Hogeschool Utrecht (OTH ADFS)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'Utrecht',
                '(OTH',
                'ADFS)',
            ],
            'nl' => [
                'Hogeschool',
                'Utrecht',
                '(OTH',
                'ADFS)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hu.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/bb08f1d3-c473-490c-9cc5-4156afb7b8f9/'] = [
    'entityid' => 'https://sts.windows.net/bb08f1d3-c473-490c-9cc5-4156afb7b8f9/',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/1b6856f4101faae7211b79a6278fabfe',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => '2AT Test IdP',
            'en' => '2AT Test IdP',
        ],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                '2AT',
                'Test',
                'IdP',
                'Azure',
                'SURF',
            ],
            'nl' => [
                '2AT',
                'Test',
                'IdP',
                'Azure',
                'SURF',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/2at.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => '2AT Test IdP',
        'en' => '2AT Test IdP',
    ],
];
$metadata['https://test.secure.ahk.nl/nidp/saml2/metadata'] = [
    'entityid' => 'https://test.secure.ahk.nl/nidp/saml2/metadata',
    'description' => [
        'en' => 'test.secure.ahk.nl',
    ],
    'OrganizationName' => [
        'en' => 'test.secure.ahk.nl',
    ],
    'name' => [
        'nl' => 'Amsterdamse Hogeschool voor de Kunsten',
    ],
    'OrganizationDisplayName' => [
        'en' => 'test.secure.ahk.nl',
    ],
    'url' => [
        'en' => 'https://test.secure.ahk.nl/nidp',
    ],
    'OrganizationURL' => [
        'en' => 'https://test.secure.ahk.nl/nidp',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/41e84652179e7bda8ecec622fceb1c7a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'ahk.nl',
        'student.ahk.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Amsterdamse Hogeschool voor de Kunsten',
        ],
        'Description' => [
            'nl' => 'Amsterdamse Hogeschool voor de Kunsten',
            'en' => 'Amsterdamse Hogeschool voor de Kunsten',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'amsterdam',
                'school',
                'of',
                'the',
                'arts',
                'ahk',
                'university',
            ],
            'nl' => [
                'Amsterdamse',
                'Hogeschool',
                'voor',
                'de',
                'Kunsten',
                'ahk',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/ahk-logo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/ed9f3ca1-097f-493e-a129-5002e9c16d65/'] = [
    'entityid' => 'https://sts.windows.net/ed9f3ca1-097f-493e-a129-5002e9c16d65/',
    'description' => [
        'nl' => 'Prinses Máxima Centrum',
        'en' => 'Prinses Máxima Centrum',
    ],
    'OrganizationName' => [
        'nl' => 'Prinses Máxima Centrum',
        'en' => 'Prinses Máxima Centrum',
    ],
    'name' => [
        'nl' => 'Prinses Máxima Centrum [Azure AD] (test)',
        'en' => 'Prinses Máxima Centrum [Azure AD] (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Prinses Máxima Centrum',
        'en' => 'Prinses Máxima Centrum',
    ],
    'url' => [
        'nl' => 'https://www.prinsesmaximacentrum.nl/',
        'en' => 'https://www.prinsesmaximacentrum.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.prinsesmaximacentrum.nl/',
        'en' => 'https://www.prinsesmaximacentrum.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/df8cccffaf7ab7eb6a3625658df4a52a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'prinsesmaximacentrum.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Prinses Máxima Centrum [Azure AD] (test)',
            'en' => 'Prinses Máxima Centrum [Azure AD] (test)',
        ],
        'Description' => [
            'nl' => 'Prinses Máxima Centrum voor kinderoncologie',
            'en' => 'Prinses Máxima Centrum voor kinderoncologie',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Prinses',
                'Máxima',
                'Maxima',
                'Centrum',
                'kinderoncologie',
                'Utrecht',
                'PMC',
            ],
            'nl' => [
                'Prinses',
                'Máxima',
                'Maxima',
                'Centrum',
                'kinderoncologie',
                'Utrecht',
                'PMC',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/prinsesmaximacentrum.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://adfs3-aai.wind.surfnet.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfs3-aai.wind.surfnet.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/927f2facf60828929420653e4827278a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'braindrops.nl',
        'braindrops.org',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SURFnet ADFS3 test IdP',
            'en' => 'SURFnet ADFS3 test IdP',
        ],
        'Description' => [
            'nl' => 'SURFnet ADFS3 test IdP',
            'en' => 'SURFnet ADFS3 test IdP',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SURFnet',
                'ADFS',
                'adfs4',
                'IdP',
                'dropjes',
            ],
            'nl' => [
                'SURFnet',
                'ADFS',
                'adfs4',
                'IdP',
                'dropjes',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/SURFdropsADFS.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SURFnet ADFS3 test IdP',
        'en' => 'SURFnet ADFS3 test IdP',
    ],
];
$metadata['https://readid.test2.surfconext.nl/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://readid.test2.surfconext.nl/simplesaml/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/aecf130fd103326b03648ec0f4b33d2e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ReadID ID controle',
            'en' => 'ReadID ID check',
        ],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/readid.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'ReadID ID controle',
        'en' => 'ReadID ID check',
    ],
];
$metadata['http://fs.loi.nl/adfs/services/trust'] = [
    'entityid' => 'http://fs.loi.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Leidse Onderwijsinstellingen',
        'en' => 'Leidse Onderwijsinstellingen',
    ],
    'OrganizationName' => [
        'nl' => 'Leidse Onderwijsinstellingen',
        'en' => 'Leidse Onderwijsinstellingen',
    ],
    'name' => [
        'nl' => 'Leidse Onderwijsinstellingen (test)',
        'en' => 'Leidse Onderwijsinstellingen (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Leidse Onderwijsinstellingen',
        'en' => 'Leidse Onderwijsinstellingen',
    ],
    'url' => [
        'nl' => 'http://www.loi.nl',
        'en' => 'http://www.loi.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.loi.nl',
        'en' => 'http://www.loi.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/5d93d5b9e35dd46268f87c0a40bd7765',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'loi.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Leidse Onderwijsinstellingen (test)',
            'en' => 'Leidse Onderwijsinstellingen (test)',
        ],
        'Description' => [
            'nl' => 'Leidse Onderwijsinstellingen hogeschool',
            'en' => 'Leidse Onderwijsinstellingen',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Leidse',
                'Onderwijsinstellingen',
                'loi',
            ],
            'nl' => [
                'Leidse',
                'Onderwijsinstellingen',
                'loi',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/loi.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/fc974d8c-c531-44d2-a585-401595cc2066/'] = [
    'entityid' => 'https://sts.windows.net/fc974d8c-c531-44d2-a585-401595cc2066/',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/c916642423b0dc36c4691ea2ce1feb55',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'inholland.nl',
        'student.inholland.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/inholland.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/66db01a1-8ec8-4591-87b0-fe35b8440663/'] = [
    'entityid' => 'https://sts.windows.net/66db01a1-8ec8-4591-87b0-fe35b8440663/',
    'description' => [
        'nl' => 'mboRijnland',
        'en' => 'mboRijnland',
    ],
    'OrganizationName' => [
        'nl' => 'mboRijnland',
        'en' => 'mboRijnland',
    ],
    'name' => [
        'nl' => 'mboRijnland (MS Azure AD test)',
        'en' => 'mboRijnland (MS Azure AD test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'mboRijnland',
        'en' => 'mboRijnland',
    ],
    'url' => [
        'nl' => 'https://mborijnland.nl/',
        'en' => 'https://mborijnland.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://mborijnland.nl/',
        'en' => 'https://mborijnland.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/d7ee445ff0718fa38da748b9d0b0a40a',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'mborijnland.nl',
        'test-mborijnland.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'mboRijnland (MS Azure AD test)',
            'en' => 'mboRijnland (MS Azure AD test)',
        ],
        'Description' => [
            'nl' => 'mboRijnland (MS Azure AD test)',
            'en' => 'mboRijnland (MS Azure AD test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'mborijnland',
                'mbo',
                'rijnland',
            ],
            'nl' => [
                'mborijnland',
                'mbo',
                'rijnland',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/mborijnland2.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://login.testsurfid.surf.nl/adfs/services/trust'] = [
    'entityid' => 'http://login.testsurfid.surf.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/abbbda7051579b44de7d9892ce10b14c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'surf.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/surf.svg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://sts-aheim.andersheim.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts-aheim.andersheim.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Hogeschool Windesheim',
        'en' => 'Hogeschool Windesheim',
    ],
    'OrganizationName' => [
        'nl' => 'Hogeschool Windesheim',
        'en' => 'Hogeschool Windesheim',
    ],
    'name' => [
        'nl' => 'Hogeschool Windesheim',
        'en' => 'Hogeschool Windesheim',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Hogeschool Windesheim',
        'en' => 'Hogeschool Windesheim',
    ],
    'url' => [
        'nl' => 'http://www.windesheim.nl',
        'en' => 'http://www.windesheim.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.windesheim.nl',
        'en' => 'http://www.windesheim.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/2cf76f8ade5feb6b2f4f92e946a0a365',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'andersheim.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [
            'nl' => 'Hogeschool Windesheim (Nieuwe Test)',
            'en' => 'Hogeschool Windesheim (New Test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'Windesheim',
            ],
            'nl' => [
                'Hogeschool',
                'Windesheim',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/windesheim.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://sts-acc.hhs.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts-acc.hhs.nl/adfs/services/trust',
    'description' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'OrganizationName' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'name' => [
        'nl' => 'De Haagse Hogeschool (HHS) (acc) [Meer testen]',
        'en' => 'The Hague University of Applied Science (THUAS) (acc) [Test 4 more]',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'De Haagse Hogeschool',
        'en' => 'The Hague University of Applied Science',
    ],
    'url' => [
        'nl' => 'https://www.dehaagsehogeschool.nl/',
        'en' => 'https://www.dehaagsehogeschool.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.dehaagsehogeschool.nl/',
        'en' => 'https://www.dehaagsehogeschool.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/7f5b7a1aa3915874bed8b3ceb8834f17',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'hhs.nl',
        'student.hhs.nl',
        'tst.hhs.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'De Haagse Hogeschool (HHS) (acc) [Meer testen]',
            'en' => 'The Hague University of Applied Science (THUAS) (acc) [Test 4 more]',
        ],
        'Description' => [
            'nl' => 'De Haagse Hogeschool (HHS) (acc)',
            'en' => 'The Hague University of Applied Science (THUAS) (acc)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Haagse',
                'Hogeschool',
                'hhs',
                'Hague',
                'thuas',
            ],
            'nl' => [
                'Haagse',
                'Hogeschool',
                'hhs',
                'Hague',
                'thuas',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/hhs.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/6200b37c-a03e-4996-ab02-6f5b017bb20f/'] = [
    'entityid' => 'https://sts.windows.net/6200b37c-a03e-4996-ab02-6f5b017bb20f/',
    'description' => [
        'en' => 'Iselinge university of applied sciences',
    ],
    'OrganizationName' => [
        'en' => 'Iselinge university of applied sciences',
    ],
    'name' => [
        'nl' => 'Iselinge Hogeschool (Azure AD Test)',
        'en' => 'Iselinge university of applied sciences (Azure AD Test)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Iselinge university of applied sciences',
    ],
    'url' => [
        'en' => 'https://www.iselinge.nl',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.iselinge.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/613fe2325e027d8b02ff49c9d10521d7',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'iselinge.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Iselinge Hogeschool (Azure AD Test)',
            'en' => 'Iselinge university of applied sciences (Azure AD Test)',
        ],
        'Description' => [
            'nl' => 'Iselinge Hogeschool (Azure AD Test)',
            'en' => 'Iselinge university of applied sciences (Azure AD Test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Iselinge',
                'Hogeschool',
            ],
            'nl' => [
                'Iselinge',
                'Hogeschool',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/iselinge.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sbbidtest.onmicrosoft.com'] = [
    'entityid' => 'https://sbbidtest.onmicrosoft.com',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/c6edb069c8a2a0253d350cf7d516f9c6',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Samenwerking Beroepsonderwijs Bedrijfsleven',
            'en' => 'Samenwerking Beroepsonderwijs Bedrijfsleven',
        ],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/sbb.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Samenwerking Beroepsonderwijs Bedrijfsleven',
        'en' => 'Samenwerking Beroepsonderwijs Bedrijfsleven',
    ],
];
$metadata['http://adfsproxy.sintlucas.nl/adfs/services/trust'] = [
    'entityid' => 'http://adfsproxy.sintlucas.nl/adfs/services/trust',
    'description' => [
        'nl' => 'SintLucas',
        'en' => 'Sintlucas',
    ],
    'OrganizationName' => [
        'nl' => 'SintLucas',
        'en' => 'Sintlucas',
    ],
    'name' => [
        'nl' => 'SintLucas (test)',
        'en' => 'SintLucas (test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'SintLucas',
        'en' => 'SintLucas',
    ],
    'url' => [
        'nl' => 'http://www.sintlucas.nl',
        'en' => 'http://www.sintlucas.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.sintlucas.nl',
        'en' => 'http://www.sintlucas.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/4a967847c003d2b61cedbc7dcd7e6ac2',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'sintlucas.nl',
        'sintlucasedu.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SintLucas (test)',
            'en' => 'SintLucas (test)',
        ],
        'Description' => [
            'nl' => 'SintLucas (test)',
            'en' => 'SintLucas (test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'sint',
                'lucas',
                'sintlucas',
                'saint',
                'luke',
            ],
            'nl' => [
                'sint',
                'lucas',
                'sintlucas',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/sintLucas.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/f70f7785-ed6a-4bff-818c-5eae386dee9f/'] = [
    'entityid' => 'https://sts.windows.net/f70f7785-ed6a-4bff-818c-5eae386dee9f/',
    'description' => [
        'nl' => 'ROC Midden Nederland',
        'en' => 'ROC Midden Nederland',
    ],
    'OrganizationName' => [
        'nl' => 'ROC Midden Nederland',
        'en' => 'ROC Midden Nederland',
    ],
    'name' => [
        'nl' => 'ROC Midden Nederland (Test Azure AD)',
        'en' => 'ROC Midden Nederland (Test Azure AD)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'ROC Midden Nederland',
        'en' => 'ROC Midden Nederland',
    ],
    'url' => [
        'nl' => 'http://www.rocmn.nl',
        'en' => 'http://www.rocmn.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.rocmn.nl',
        'en' => 'http://www.rocmn.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/7b73ed72c8ccd7faaa092f70e108111c',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Midden Nederland (Test Azure AD)',
            'en' => 'ROC Midden Nederland (Test Azure AD)',
        ],
        'Description' => [
            'nl' => 'ROC Midden Nederland is een onderwijsorganisatie voor middelbaar beroepsonderwijs, voortgezet onderwijs voor volwassen (VAVO Lyceum), bedrijfsopleidingen en participatieonderwijs in de provincie Utrecht.',
            'en' => 'ROC Midden Nederland is een onderwijsorganisatie voor middelbaar beroepsonderwijs, voortgezet onderwijs voor volwassen (VAVO Lyceum), bedrijfsopleidingen en participatieonderwijs in de provincie Utrecht.',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'rocmn',
                'ROC',
                'Midden',
                'Nederland',
                'Acceptance',
            ],
            'nl' => [
                'rocmn',
                'ROC',
                'Midden',
                'Nederland',
                'Acceptatie',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/ROCMNlogo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/49d50454-13ed-4a49-9fb0-7d99214fadf4/'] = [
    'entityid' => 'https://sts.windows.net/49d50454-13ed-4a49-9fb0-7d99214fadf4/',
    'description' => [
        'nl' => 'Hogeschool KPZ',
        'en' => 'Hogeschool KPZ',
    ],
    'OrganizationName' => [
        'nl' => 'Hogeschool KPZ',
        'en' => 'Hogeschool KPZ',
    ],
    'name' => [
        'nl' => 'Hogeschool KPZ (Test, Azure)',
        'en' => 'Hogeschool KPZ (Test, Azure)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Hogeschool KPZ (Test, Azure)',
        'en' => 'Hogeschool KPZ (Test, Azure)',
    ],
    'url' => [
        'nl' => 'http://www.kpz.nl',
        'en' => 'http://www.kpz.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.kpz.nl',
        'en' => 'http://www.kpz.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/11b795a2456837e80d2eff67555c4ba6',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'kpz.nl',
        'corp.kpz.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Hogeschool KPZ (Test, Azure)',
            'en' => 'Hogeschool KPZ (Test, Azure)',
        ],
        'Description' => [
            'nl' => 'Hogeschool KPZ (Test, Azure)',
            'en' => 'Hogeschool KPZ (Test, Azure)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Hogeschool',
                'KPZ',
                'University',
                'of',
                'Applied',
                'Science',
                'Teacher',
                'Training',
                'Institute',
                'Primary',
                'Education',
                'KPZ',
            ],
            'nl' => [
                'Hogeschool',
                'KPZ',
                '(Test,',
                'Azure)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/kpz_logo.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/2f62835f-048e-4c85-94d9-f8052060210e/'] = [
    'entityid' => 'https://sts.windows.net/2f62835f-048e-4c85-94d9-f8052060210e/',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0d0463cc148f940d41a18557880cf55e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'svo.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'SVO Vakopleiding Food',
            'en' => 'SVO Vakopleiding Food',
        ],
        'Description' => [
            'nl' => 'SVO Vakopleiding Food',
            'en' => 'SVO Vakopleiding Food',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'SVO',
                'Vakopleiding',
                'Food',
                'mbo',
            ],
            'nl' => [
                'SVO',
                'Vakopleiding',
                'Food',
                'mbo',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/svo_food.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'SVO Vakopleiding Food',
        'en' => 'SVO Vakopleiding Food',
    ],
];
$metadata['https://sts.windows.net/edc71bcd-fcd6-4c10-b409-493941851f14/'] = [
    'entityid' => 'https://sts.windows.net/edc71bcd-fcd6-4c10-b409-493941851f14/',
    'description' => [
        'en' => 'Fontys Hogescholen',
    ],
    'OrganizationName' => [
        'en' => 'Fontys Hogescholen',
    ],
    'name' => [
        'nl' => 'Fontys Hogescholen (MS Azure AD)',
        'en' => 'Fontys Hogescholen (MS Azure AD)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Fontys Hogescholen',
    ],
    'url' => [
        'en' => 'http://fontys.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://fontys.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/30405507e0dad7625eb3d2a043d03b21',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'fontys.nl',
        'hse.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Fontys Hogescholen (MS Azure AD)',
            'en' => 'Fontys Hogescholen (MS Azure AD)',
        ],
        'Description' => [
            'nl' => 'Fontys Hogescholen (MS Azure AD)',
            'en' => 'Fontys Hogescholen (MS Azure AD)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Fontys',
                'Hogescholen',
                '(MS',
                'Azure',
                'AD)',
            ],
            'nl' => [
                'Fontys',
                'Hogescholen',
                '(MS',
                'Azure',
                'AD)',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/fontys.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://tempguestidp.edubadges.nl/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://tempguestidp.edubadges.nl/simplesaml/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/3b8f462d28081bfa071e3363764b3b21',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        '.*\\.tempguestidp\\.edubadges\\.nl$',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'edubadges Naam Validatie',
            'en' => 'edubadges Name Validation',
        ],
        'Description' => [
            'nl' => 'Deze IdP is bedoeld voor edubadges gebruikers die geen account hebben bij een nederlandse instelling aangesloten op SURFconext. Gebruik deze alleen als je hiervoor specifieke instructies hebt gekregen.',
            'en' => 'This IdP is intended for edubadges users without an account at an dutch institution connected to eduID. Only use this if you\'ve received explicit instructions to do so.',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/sp/edubadges.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'edubadges Naam Validatie',
        'en' => 'edubadges Name Validation',
    ],
];
$metadata['https://sts.windows.net/55a4fc40-f613-4b7d-862c-766c477bd147/'] = [
    'entityid' => 'https://sts.windows.net/55a4fc40-f613-4b7d-862c-766c477bd147/',
    'description' => [
        'en' => 'Radboudumc',
    ],
    'OrganizationName' => [
        'en' => 'Radboudumc',
    ],
    'name' => [
        'nl' => 'Radboudumc [MS AzureAD Test]Enable',
        'en' => 'Radboudumc [MS AzureAD Test]',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Radboudumc',
    ],
    'url' => [
        'en' => 'http://www.umcn.nl/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.umcn.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/39a3db59373273e134ccfc5fb28e0d76',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'umcn.nl',
        'radboudumc.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Radboudumc [MS AzureAD Test]Enable',
            'en' => 'Radboudumc [MS AzureAD Test]',
        ],
        'Description' => [
            'nl' => 'Radboudumc [MS AzureAD Test]',
            'en' => 'Radboudumc [MS AzureAD Test]',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Radboud',
                'umc',
                'test',
                'umcn',
            ],
            'nl' => [
                'Radboud',
                'umc',
                'test',
                'umcn',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/Radboudumc.jpg',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://verifai.test2.surfconext.nl/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://verifai.test2.surfconext.nl/simplesaml/saml2/idp/metadata.php',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/5dab3c2d7e23782966ab7b63dc7d344b',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/verifai.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/e4f53d7d-1c40-4e57-8f5e-341eaf61a7d9/'] = [
    'entityid' => 'https://sts.windows.net/e4f53d7d-1c40-4e57-8f5e-341eaf61a7d9/',
    'description' => [
        'en' => 'Tilburg University (TEST)',
    ],
    'OrganizationName' => [
        'en' => 'Tilburg University (TEST)',
    ],
    'name' => [
        'nl' => 'Tilburg University (TEST AzureAD)',
        'en' => 'Tilburg University (TEST AzureAD)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Tilburg University',
    ],
    'url' => [
        'en' => 'https://www.tilburguniversity.edu',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.tilburguniversity.edu',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0f159a619fa2ca40df78f00ee793421e',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Tilburg University (TEST AzureAD)',
            'en' => 'Tilburg University (TEST AzureAD)',
        ],
        'Description' => [
            'nl' => 'Tilburg University (TEST AzureAD)',
            'en' => 'Tilburg University (TEST AzureAD)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'tilburg',
                'university',
                'uvt',
            ],
            'nl' => [
                'uvt',
                'test',
                'universiteit',
                'van',
                'tilburg',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/uvtboom.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/7a5561df-6599-4898-8a20-cce41db3b44f/'] = [
    'entityid' => 'https://sts.windows.net/7a5561df-6599-4898-8a20-cce41db3b44f/',
    'description' => [
        'en' => 'Tilburg University',
    ],
    'OrganizationName' => [
        'en' => 'Tilburg University',
    ],
    'name' => [
        'nl' => 'Tilburg University (Acc AzureAD)',
        'en' => 'Tilburg University (Acc AzureAD)',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Tilburg University',
    ],
    'url' => [
        'en' => 'https://www.tilburguniversity.edu',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.tilburguniversity.edu',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/2ae15b9a2053886cbf7aa48575a0248d',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Tilburg University (Acc AzureAD)',
            'en' => 'Tilburg University (Acc AzureAD)',
        ],
        'Description' => [
            'nl' => 'Tilburg University (Acc AzureAD)',
            'en' => 'Tilburg University (Acc AzureAD)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'tilburg',
                'university',
                'uvt',
            ],
            'nl' => [
                'uvt',
                'test',
                'universiteit',
                'van',
                'tilburg',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/uvtboom.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://sts-acc.amsterdamumc.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts-acc.amsterdamumc.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Amsterdam UMC',
        'en' => 'Amsterdam UMC',
    ],
    'OrganizationName' => [
        'nl' => 'Amsterdam UMC',
        'en' => 'Amsterdam UMC',
    ],
    'name' => [
        'nl' => 'Amsterdam UMC (Acceptatie)',
        'en' => 'Amsterdam UMC (Acceptatie)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Amsterdam UMC',
        'en' => 'Amsterdam UMC',
    ],
    'url' => [
        'nl' => 'https://www.amsterdamumc.nl/',
        'en' => 'https://www.amsterdamumc.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.amsterdamumc.nl/',
        'en' => 'https://www.amsterdamumc.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/b373d90f7f76eab3b9fd19c94581d4ff',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'amsterdamumc.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Amsterdam UMC (Acceptatie)',
            'en' => 'Amsterdam UMC (Acceptatie)',
        ],
        'Description' => [
            'nl' => 'Amsterdam UMC (Acceptatie)',
            'en' => 'Amsterdam UMC (Acceptatie)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'UAMC',
                'Academisch',
                'Medisch',
                'Centrum',
                'VUmc',
                'AMC',
                'UMC',
            ],
            'nl' => [
                'UAMC',
                'Academisch',
                'Medisch',
                'Centrum',
                'VUmc',
                'AMC',
                'UMC',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/aumc.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://sts-acc.amc.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts-acc.amc.nl/adfs/services/trust',
    'description' => [
        'nl' => 'Academisch Medisch Centrum',
        'en' => 'Academisch Medisch Centrum',
    ],
    'OrganizationName' => [
        'nl' => 'Academisch Medisch Centrum',
        'en' => 'Academisch Medisch Centrum',
    ],
    'name' => [
        'nl' => 'Academisch Medisch Centrum (Acceptatie - Nieuw)',
        'en' => 'Academisch Medisch Centrum (Acceptatie)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Academisch Medisch Centrum',
        'en' => 'Academisch Medisch Centrum',
    ],
    'url' => [
        'nl' => 'http://www.amc.nl/',
        'en' => 'http://www.amc.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.amc.nl/',
        'en' => 'http://www.amc.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/8512ad221e82b22d2b1297b42ecc12d9',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'amc.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Academisch Medisch Centrum (Acceptatie - Nieuw)',
            'en' => 'Academisch Medisch Centrum (Acceptatie)',
        ],
        'Description' => [
            'nl' => 'Academisch Medisch Centrum (Acceptatie - Nieuw)',
            'en' => 'Academisch Medisch Centrum (Acceptatie - New)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'AMC',
                'Academisch',
                'Medisch',
                'Centrum',
            ],
            'nl' => [
                'AMC',
                'Academisch',
                'Medisch',
                'Centrum',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/amc.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['http://sts-acc.vumc.nl/adfs/services/trust'] = [
    'entityid' => 'http://sts-acc.vumc.nl/adfs/services/trust',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/d6da92bf0d6cd321c4174114b1e526de',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'VUmc (Acceptatie - Niuew)',
            'en' => 'VUmc (Acceptatie - New)',
        ],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/vumc.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'VUmc (Acceptatie - Niuew)',
        'en' => 'VUmc (Acceptatie - New)',
    ],
];
$metadata['https://sts.windows.net/b81dfe70-804c-42e6-ae4e-0488ad42976f/'] = [
    'entityid' => 'https://sts.windows.net/b81dfe70-804c-42e6-ae4e-0488ad42976f/',
    'description' => [
        'nl' => 'Museon',
        'en' => 'Museon',
    ],
    'OrganizationName' => [
        'nl' => 'Museon',
        'en' => 'Museon',
    ],
    'name' => [
        'nl' => 'Museon',
        'en' => 'Museon',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Museon',
        'en' => 'Museon',
    ],
    'url' => [
        'nl' => 'https://www.museon.nl',
        'en' => 'https://www.museon.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.museon.nl',
        'en' => 'https://www.museon.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/a2b2401ed22cdfbd17e455b325d0b975',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Museon',
            'en' => 'Museon',
        ],
        'Description' => [
            'nl' => 'Museon',
            'en' => 'Museon',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'museon',
            ],
            'nl' => [
                'museon',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/museon.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/607c2ac4-da16-4b70-87ea-0a2909c0dcfb/'] = [
    'entityid' => 'https://sts.windows.net/607c2ac4-da16-4b70-87ea-0a2909c0dcfb/',
    'description' => [
        'nl' => 'MBO Amersfoort',
        'en' => 'MBO Amersfoort',
    ],
    'OrganizationName' => [
        'nl' => 'MBO Amersfoort',
        'en' => 'MBO Amersfoort',
    ],
    'name' => [
        'nl' => 'MBO Amersfoort [MS Azure AD]',
        'en' => 'MBO Amersfoort [MS Azure AD]',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'MBO Amersfoort',
        'en' => 'MBO Amersfoort',
    ],
    'url' => [
        'nl' => 'https://www.mboamersfoort.nl/',
        'en' => 'https://www.mboamersfoort.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.mboamersfoort.nl/',
        'en' => 'https://www.mboamersfoort.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/de24d7ec41a0bafd77564ad5cd5e5696',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'mboamersfoort.nl',
        'student.mboamersfoort.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'MBO Amersfoort [MS Azure AD]',
            'en' => 'MBO Amersfoort [MS Azure AD]',
        ],
        'Description' => [
            'nl' => 'MBO Amersfoort',
            'en' => 'MBO Amersfoort',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'MBO',
                'Amersfoort',
            ],
            'nl' => [
                'MBO',
                'Amersfoort',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/mboa.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/bca0018b-c9e1-4e22-add3-f6585564f00f/'] = [
    'entityid' => 'https://sts.windows.net/bca0018b-c9e1-4e22-add3-f6585564f00f/',
    'description' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'OrganizationName' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'name' => [
        'nl' => 'ROC Albeda start (Test)',
        'en' => 'ROC Albeda start (Test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'ROC Albeda',
        'en' => 'ROC Albeda',
    ],
    'url' => [
        'nl' => 'http://www.albeda.nl/',
        'en' => 'http://www.albeda.nl/',
    ],
    'OrganizationURL' => [
        'nl' => 'http://www.albeda.nl/',
        'en' => 'http://www.albeda.nl/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/fe532ab4fb0e89f04fdc81842eb8ab97',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'albeda.nl',
        'student.albeda.nl',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'ROC Albeda start (Test)',
            'en' => 'ROC Albeda start (Test)',
        ],
        'Description' => [
            'nl' => 'ROC Albeda (MS Azure AD [Nieuw])',
            'en' => 'ROC Albeda (MS Azure AD [New])',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'roc',
                'albeda',
                'college',
                'rotterdam',
            ],
            'nl' => [
                'roc',
                'albeda',
                'college',
                'rotterdam',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/albeda.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://sts.windows.net/ad18e52c-733a-4e8f-8249-bbb9b43e3e34/'] = [
    'entityid' => 'https://sts.windows.net/ad18e52c-733a-4e8f-8249-bbb9b43e3e34/',
    'description' => [
        'nl' => 'Rijn IJssel',
        'en' => 'Rijn IJssel',
    ],
    'OrganizationName' => [
        'nl' => 'Rijn IJssel',
        'en' => 'Rijn IJssel',
    ],
    'name' => [
        'nl' => 'Rijn IJssel (Test)',
        'en' => 'Rijn IJssel (Test)',
    ],
    'OrganizationDisplayName' => [
        'nl' => 'Rijn IJssel',
        'en' => 'Rijn IJssel',
    ],
    'url' => [
        'nl' => 'https://www.rijnijssel.nl',
        'en' => 'https://www.rijnijssel.nl',
    ],
    'OrganizationURL' => [
        'nl' => 'https://www.rijnijssel.nl',
        'en' => 'https://www.rijnijssel.nl',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/0b062c4ee4d3c244a77647f7331efe06',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'scope' => [
        'rijnijssel.info',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Rijn IJssel (Test)',
            'en' => 'Rijn IJssel (Test)',
        ],
        'Description' => [
            'nl' => 'Rijn IJssel (Test)',
            'en' => 'Rijn IJssel (Test)',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Rijn',
                'IJssel',
                'ROC',
                'MBO',
            ],
            'nl' => [
                'Rijn',
                'IJssel',
                'ROC',
                'MBO',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/logos/idp/rijnijssel.gif',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
];
$metadata['https://accounts.google.com/o/saml2?idpid=C019wdac6'] = [
    'entityid' => 'https://accounts.google.com/o/saml2?idpid=C019wdac6',
    'contacts' => [
        [
            'contactType' => 'administrative',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'support@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'support',
            'givenName' => 'SURFconext support',
            'emailAddress' => [
                'help@surfconext.nl',
            ],
        ],
        [
            'contactType' => 'other',
            'givenName' => 'SURFcert',
            'emailAddress' => [
                'cert@surfnet.nl',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1672141561,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on/key:20190208/c982c5e68f69205bc649f4dd8e79b612',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEATCCAumgAwIBAgIULxKkZBLB4NcvlnV253iUmoreAqIwDQYJKoZIhvcNAQELBQAwgYoxCzAJBgNVBAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYDVQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxKzApBgNVBAMMImVuZ2luZS50ZXN0LnN1cmZjb25leHQubmwgMjAxODAyMDgwHhcNMTkwMjA4MTI0OTE1WhcNMjMxMTEzMTI0OTE1WjCBijELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcMB1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNvbmV4dDErMCkGA1UEAwwiZW5naW5lLnRlc3Quc3VyZmNvbmV4dC5ubCAyMDE4MDIwODCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANAJtsoE3s5adBMuO3BjV3mWaT4dLwgqHwyS/07Nnr/EwC4QlzryEwDXvxh/ZVSeyDa/VCOQZrx5hKcyUcoyCT+FCTfm5mF+90ROeyoIgMxK3S9vXPAwWugysUYEw2ZAV7xYSjZ/63rpFdJJ1dDgLdjOPsnEuYzrRIM9akBQlcg6xb4plRwRDwxkZvTEyD/xzEc3Xi62g6ag1cnhRubuxoGCdGUW+5U8WNyW4tY5NEN/t/pZPXqmEvAwlU3C5XZX0+aKbq1n73gsRv10nJzmDpwl/JYx73sgS6vrnIAdl942c9TnSiTxvL4SDtGP/mP2iq+q6ewZAPSkfEIl+5p4zAMCAwEAAaNdMFswHQYDVR0OBBYEFC7iwe/L6YQHDhtxYBdxBiIiaVnbMB8GA1UdIwQYMBaAFC7iwe/L6YQHDhtxYBdxBiIiaVnbMAwGA1UdEwQFMAMBAf8wCwYDVR0PBAQDAgeAMA0GCSqGSIb3DQEBCwUAA4IBAQC6MXBNfAPL5RSYuall2y0v2PjBigHD42zKC48h1Dp2K1zctTusPEStB1MfFTUA0dNYu+w10ablEtin8Nnk3UyNqOAqR55mNL0xDVnH/IG+iuGhmWmtv9DjI540hA9wR3bflzrpv4iBx3mlxpVO0+qvR+gwWZcDwC//g67TpGyRxFOZBS6g7FAnVJD0m72N68gQJ/zly8/ZfMjTrrLl5Gr3bqPJTG2JQazCXhE+2T9QRzdk+dyoTj0v9yrTlGkXFyOMn27Z0s5aW8iOrkJNClwSI5VO6i/g4p+g3aNVpcjzdRoX+YlC1fmoL9T66Uw2yVsmwRmQRmNghG8m27MuhRwO',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'nl' => 'Haarlem Campus',
            'en' => 'Haarlem Campus',
        ],
        'Description' => [
            'nl' => 'Een IdP voor de Haarlem Campus',
            'en' => 'An IdP for the Haarlem Campus',
        ],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
        'Keywords' => [
            'en' => [
                'Haarlem',
                'Campus',
            ],
            'nl' => [
                'Haarlem',
                'Campus',
            ],
        ],
        'Logo' => [
            [
                'url' => 'https://static.surfconext.nl/media/idp/HaarlemCampus.png',
                'height' => 160,
                'width' => 200,
            ],
        ],
    ],
    'name' => [
        'nl' => 'Haarlem Campus',
        'en' => 'Haarlem Campus',
    ],
];
