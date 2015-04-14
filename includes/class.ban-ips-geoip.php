<?php

class EDD_Ban_IPs_GeoIP {
	const COUNTRY_ANONYMOUS_PROXY = 'A1';
	const COUNTRY_SATELLITE_PROVIDER = 'A2';
	const COUNTRY_OTHER_COUNTRY = 'O1';
	const COUNTRY_ANDORRA = 'AD';
	const COUNTRY_UNITED_ARAB_EMIRATES = 'AE';
	const COUNTRY_AFGHANISTAN = 'AF';
	const COUNTRY_ANTIGUA_AND_BARBUDA = 'AG';
	const COUNTRY_ANGUILLA = 'AI';
	const COUNTRY_ALBANIA = 'AL';
	const COUNTRY_ARMENIA = 'AM';
	const COUNTRY_ANGOLA = 'AO';
	const COUNTRY_ASIA_PACIFIC_REGION = 'AP';
	const COUNTRY_ANTARCTICA = 'AQ';
	const COUNTRY_ARGENTINA = 'AR';
	const COUNTRY_AMERICAN_SAMOA = 'AS';
	const COUNTRY_AUSTRIA = 'AT';
	const COUNTRY_AUSTRALIA = 'AU';
	const COUNTRY_ARUBA = 'AW';
	const COUNTRY_ALAND_ISLANDS = 'AX';
	const COUNTRY_AZERBAIJAN = 'AZ';
	const COUNTRY_BOSNIA_AND_HERZEGOVINA = 'BA';
	const COUNTRY_BARBADOS = 'BB';
	const COUNTRY_BANGLADESH = 'BD';
	const COUNTRY_BELGIUM = 'BE';
	const COUNTRY_BURKINA_FASO = 'BF';
	const COUNTRY_BULGARIA = 'BG';
	const COUNTRY_BAHRAIN = 'BH';
	const COUNTRY_BURUNDI = 'BI';
	const COUNTRY_BENIN = 'BJ';
	const COUNTRY_SAINT_BARTELEMEY = 'BL';
	const COUNTRY_BERMUDA = 'BM';
	const COUNTRY_BRUNEI_DARUSSALAM = 'BN';
	const COUNTRY_BOLIVIA = 'BO';
	const COUNTRY_BONAIRE_SAINT_EUSTATIUS_AND_SABA = 'BQ';
	const COUNTRY_BRAZIL = 'BR';
	const COUNTRY_BAHAMAS = 'BS';
	const COUNTRY_BHUTAN = 'BT';
	const COUNTRY_BOUVET_ISLAND = 'BV';
	const COUNTRY_BOTSWANA = 'BW';
	const COUNTRY_BELARUS = 'BY';
	const COUNTRY_BELIZE = 'BZ';
	const COUNTRY_CANADA = 'CA';
	const COUNTRY_COCOS_ISLANDS = 'CC';
	const COUNTRY_CONGO_THE_DEMOCRATIC_REPUBLIC_OF_THE = 'CD';
	const COUNTRY_CENTRAL_AFRICAN_REPUBLIC = 'CF';
	const COUNTRY_CONGO = 'CG';
	const COUNTRY_SWITZERLAND = 'CH';
	const COUNTRY_COTE_D_IVOIRE = 'CI';
	const COUNTRY_COOK_ISLANDS = 'CK';
	const COUNTRY_CHILE = 'CL';
	const COUNTRY_CAMEROON = 'CM';
	const COUNTRY_CHINA = 'CN';
	const COUNTRY_COLOMBIA = 'CO';
	const COUNTRY_COSTA_RICA = 'CR';
	const COUNTRY_CUBA = 'CU';
	const COUNTRY_CAPE_VERDE = 'CV';
	const COUNTRY_CURACAO = 'CW';
	const COUNTRY_CHRISTMAS_ISLAND = 'CX';
	const COUNTRY_CYPRUS = 'CY';
	const COUNTRY_CZECH_REPUBLIC = 'CZ';
	const COUNTRY_GERMANY = 'DE';
	const COUNTRY_DJIBOUTI = 'DJ';
	const COUNTRY_DENMARK = 'DK';
	const COUNTRY_DOMINICA = 'DM';
	const COUNTRY_DOMINICAN_REPUBLIC = 'DO';
	const COUNTRY_ALGERIA = 'DZ';
	const COUNTRY_ECUADOR = 'EC';
	const COUNTRY_ESTONIA = 'EE';
	const COUNTRY_EGYPT = 'EG';
	const COUNTRY_WESTERN_SAHARA = 'EH';
	const COUNTRY_ERITREA = 'ER';
	const COUNTRY_SPAIN = 'ES';
	const COUNTRY_ETHIOPIA = 'ET';
	const COUNTRY_EUROPE = 'EU';
	const COUNTRY_FINLAND = 'FI';
	const COUNTRY_FIJI = 'FJ';
	const COUNTRY_FALKLAND_ISLANDS = 'FK';
	const COUNTRY_MICRONESIA_FEDERATED_STATES = 'FM';
	const COUNTRY_FAROE_ISLANDS = 'FO';
	const COUNTRY_FRANCE = 'FR';
	const COUNTRY_GABON = 'GA';
	const COUNTRY_UNITED_KINGDOM = 'GB';
	const COUNTRY_GRENADA = 'GD';
	const COUNTRY_GEORGIA = 'GE';
	const COUNTRY_FRENCH_GUIANA = 'GF';
	const COUNTRY_GUERNSEY = 'GG';
	const COUNTRY_GHANA = 'GH';
	const COUNTRY_GIBRALTAR = 'GI';
	const COUNTRY_GREENLAND = 'GL';
	const COUNTRY_GAMBIA = 'GM';
	const COUNTRY_GUINEA = 'GN';
	const COUNTRY_GUADELOUPE = 'GP';
	const COUNTRY_EQUATORIAL_GUINEA = 'GQ';
	const COUNTRY_GREECE = 'GR';
	const COUNTRY_SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS = 'GS';
	const COUNTRY_GUATEMALA = 'GT';
	const COUNTRY_GUAM = 'GU';
	const COUNTRY_GUINEA_BISSAU = 'GW';
	const COUNTRY_GUYANA = 'GY';
	const COUNTRY_HONG_KONG = 'HK';
	const COUNTRY_HEARD_ISLAND_AND_MCDONALD_ISLANDS = 'HM';
	const COUNTRY_HONDURAS = 'HN';
	const COUNTRY_CROATIA = 'HR';
	const COUNTRY_HAITI = 'HT';
	const COUNTRY_HUNGARY = 'HU';
	const COUNTRY_INDONESIA = 'ID';
	const COUNTRY_IRELAND = 'IE';
	const COUNTRY_ISRAEL = 'IL';
	const COUNTRY_ISLE_OF_MAN = 'IM';
	const COUNTRY_INDIA = 'IN';
	const COUNTRY_BRITISH_INDIAN_OCEAN_TERRITORY = 'IO';
	const COUNTRY_IRAQ = 'IQ';
	const COUNTRY_IRAN_ISLAMIC_REPUBLIC_OF = 'IR';
	const COUNTRY_ICELAND = 'IS';
	const COUNTRY_ITALY = 'IT';
	const COUNTRY_JERSEY = 'JE';
	const COUNTRY_JAMAICA = 'JM';
	const COUNTRY_JORDAN = 'JO';
	const COUNTRY_JAPAN = 'JP';
	const COUNTRY_KENYA = 'KE';
	const COUNTRY_KYRGYZSTAN = 'KG';
	const COUNTRY_CAMBODIA = 'KH';
	const COUNTRY_KIRIBATI = 'KI';
	const COUNTRY_COMOROS = 'KM';
	const COUNTRY_SAINT_KITTS_AND_NEVIS = 'KN';
	const COUNTRY_KOREA_DEMOCRATIC_PEOPLE_S_REPUBLIC = 'KP';
	const COUNTRY_KOREA_REPUBLIC_OF = 'KR';
	const COUNTRY_KUWAIT = 'KW';
	const COUNTRY_CAYMAN_ISLANDS = 'KY';
	const COUNTRY_KAZAKHSTAN = 'KZ';
	const COUNTRY_LAO_PEOPLE_S_DEMOCRATIC_REPUBLIC = 'LA';
	const COUNTRY_LEBANON = 'LB';
	const COUNTRY_SAINT_LUCIA = 'LC';
	const COUNTRY_LIECHTENSTEIN = 'LI';
	const COUNTRY_SRI_LANKA = 'LK';
	const COUNTRY_LIBERIA = 'LR';
	const COUNTRY_LESOTHO = 'LS';
	const COUNTRY_LITHUANIA = 'LT';
	const COUNTRY_LUXEMBOURG = 'LU';
	const COUNTRY_LATVIA = 'LV';
	const COUNTRY_LIBYAN_ARAB_JAMAHIRIYA = 'LY';
	const COUNTRY_MOROCCO = 'MA';
	const COUNTRY_MONACO = 'MC';
	const COUNTRY_MOLDOVA_REPUBLIC_OF = 'MD';
	const COUNTRY_MONTENEGRO = 'ME';
	const COUNTRY_SAINT_MARTIN = 'MF';
	const COUNTRY_MADAGASCAR = 'MG';
	const COUNTRY_MARSHALL_ISLANDS = 'MH';
	const COUNTRY_MACEDONIA = 'MK';
	const COUNTRY_MALI = 'ML';
	const COUNTRY_MYANMAR = 'MM';
	const COUNTRY_MONGOLIA = 'MN';
	const COUNTRY_MACAO = 'MO';
	const COUNTRY_NORTHERN_MARIANA_ISLANDS = 'MP';
	const COUNTRY_MARTINIQUE = 'MQ';
	const COUNTRY_MAURITANIA = 'MR';
	const COUNTRY_MONTSERRAT = 'MS';
	const COUNTRY_MALTA = 'MT';
	const COUNTRY_MAURITIUS = 'MU';
	const COUNTRY_MALDIVES = 'MV';
	const COUNTRY_MALAWI = 'MW';
	const COUNTRY_MEXICO = 'MX';
	const COUNTRY_MALAYSIA = 'MY';
	const COUNTRY_MOZAMBIQUE = 'MZ';
	const COUNTRY_NAMIBIA = 'NA';
	const COUNTRY_NEW_CALEDONIA = 'NC';
	const COUNTRY_NIGER = 'NE';
	const COUNTRY_NORFOLK_ISLAND = 'NF';
	const COUNTRY_NIGERIA = 'NG';
	const COUNTRY_NICARAGUA = 'NI';
	const COUNTRY_NETHERLANDS = 'NL';
	const COUNTRY_NORWAY = 'NO';
	const COUNTRY_NEPAL = 'NP';
	const COUNTRY_NAURU = 'NR';
	const COUNTRY_NIUE = 'NU';
	const COUNTRY_NEW_ZEALAND = 'NZ';
	const COUNTRY_OMAN = 'OM';
	const COUNTRY_PANAMA = 'PA';
	const COUNTRY_PERU = 'PE';
	const COUNTRY_FRENCH_POLYNESIA = 'PF';
	const COUNTRY_PAPUA_NEW_GUINEA = 'PG';
	const COUNTRY_PHILIPPINES = 'PH';
	const COUNTRY_PAKISTAN = 'PK';
	const COUNTRY_POLAND = 'PL';
	const COUNTRY_SAINT_PIERRE_AND_MIQUELON = 'PM';
	const COUNTRY_PITCAIRN = 'PN';
	const COUNTRY_PUERTO_RICO = 'PR';
	const COUNTRY_PALESTINIAN_TERRITORY = 'PS';
	const COUNTRY_PORTUGAL = 'PT';
	const COUNTRY_PALAU = 'PW';
	const COUNTRY_PARAGUAY = 'PY';
	const COUNTRY_QATAR = 'QA';
	const COUNTRY_REUNION = 'RE';
	const COUNTRY_ROMANIA = 'RO';
	const COUNTRY_SERBIA = 'RS';
	const COUNTRY_RUSSIAN_FEDERATION = 'RU';
	const COUNTRY_RWANDA = 'RW';
	const COUNTRY_SAUDI_ARABIA = 'SA';
	const COUNTRY_SOLOMON_ISLANDS = 'SB';
	const COUNTRY_SEYCHELLES = 'SC';
	const COUNTRY_SUDAN = 'SD';
	const COUNTRY_SWEDEN = 'SE';
	const COUNTRY_SINGAPORE = 'SG';
	const COUNTRY_SAINT_HELENA = 'SH';
	const COUNTRY_SLOVENIA = 'SI';
	const COUNTRY_SVALBARD_AND_JAN_MAYEN = 'SJ';
	const COUNTRY_SLOVAKIA = 'SK';
	const COUNTRY_SIERRA_LEONE = 'SL';
	const COUNTRY_SAN_MARINO = 'SM';
	const COUNTRY_SENEGAL = 'SN';
	const COUNTRY_SOMALIA = 'SO';
	const COUNTRY_SURINAME = 'SR';
	const COUNTRY_SOUTH_SUDAN = 'SS';
	const COUNTRY_SAO_TOME_AND_PRINCIPE = 'ST';
	const COUNTRY_EL_SALVADOR = 'SV';
	const COUNTRY_SINT_MAARTEN = 'SX';
	const COUNTRY_SYRIAN_ARAB_REPUBLIC = 'SY';
	const COUNTRY_SWAZILAND = 'SZ';
	const COUNTRY_TURKS_AND_CAICOS_ISLANDS = 'TC';
	const COUNTRY_CHAD = 'TD';
	const COUNTRY_FRENCH_SOUTHERN_TERRITORIES = 'TF';
	const COUNTRY_TOGO = 'TG';
	const COUNTRY_THAILAND = 'TH';
	const COUNTRY_TAJIKISTAN = 'TJ';
	const COUNTRY_TOKELAU = 'TK';
	const COUNTRY_TIMOR_LESTE = 'TL';
	const COUNTRY_TURKMENISTAN = 'TM';
	const COUNTRY_TUNISIA = 'TN';
	const COUNTRY_TONGA = 'TO';
	const COUNTRY_TURKEY = 'TR';
	const COUNTRY_TRINIDAD_AND_TOBAGO = 'TT';
	const COUNTRY_TUVALU = 'TV';
	const COUNTRY_TAIWAN = 'TW';
	const COUNTRY_TANZANIA_UNITED_REPUBLIC_OF = 'TZ';
	const COUNTRY_UKRAINE = 'UA';
	const COUNTRY_UGANDA = 'UG';
	const COUNTRY_UNITED_STATES_MINOR_OUTLYING_ISLANDS = 'UM';
	const COUNTRY_UNITED_STATES = 'US';
	const COUNTRY_URUGUAY = 'UY';
	const COUNTRY_UZBEKISTAN = 'UZ';
	const COUNTRY_VATICAN_CITY_STATE = 'VA';
	const COUNTRY_SAINT_VINCENT_AND_THE_GRENADINES = 'VC';
	const COUNTRY_VENEZUELA = 'VE';
	const COUNTRY_VIRGIN_ISLANDS_BRITISH = 'VG';
	const COUNTRY_VIRGIN_ISLANDS_US = 'VI';
	const COUNTRY_VIETNAM = 'VN';
	const COUNTRY_VANUATU = 'VU';
	const COUNTRY_WALLIS_AND_FUTUNA = 'WF';
	const COUNTRY_SAMOA = 'WS';
	const COUNTRY_YEMEN = 'YE';
	const COUNTRY_MAYOTTE = 'YT';
	const COUNTRY_SOUTH_AFRICA = 'ZA';
	const COUNTRY_ZAMBIA = 'ZM';
	const COUNTRY_ZIMBABWE = 'ZW';

	/**
	 * Database files relative to the current directory.
	 *
	 * @var string[]
	 */
	private $db_files = array(
		'maxmind'     => '../data/GeoLite2-Country.mmdb',
		'ip2location' => '../data/IP-COUNTRY-SAMPLE.BIN'
	);

	/**
	 * Whether to connect to remote services if the local services cannot obtain the necessary data.
	 *
	 * @var bool
	 */
	private $use_remote_services = true;

	/**
	 * Maximum amount of seconds to wait for remote service connections to respond.
	 *
	 * @var int
	 */
	private $request_timeout_seconds = 30;

	/**
	 * Returns true if the current visitor is connecting from the specified country.
	 *
	 * @param string $country_code one of self::COUNTRY_*
	 *
	 * @return bool
	 */
	public function is_current_visitor_in_country( $country_code ) {
		foreach ( $this->get_current_ips() as $ip ) {
			var_dump( $this->get_country_code_by_ip( $ip ) );
			if ( $this->get_country_code_by_ip( $ip ) == $country_code ) {
				return true;
			}
		}

		return false;
	}

	/**
	 * Returns true if an IP is assigned to a specific country.
	 *
	 * @param string $ip
	 * @param string $country_code one of self::COUNTRY_*
	 *
	 * @return bool
	 */
	public function is_ip_in_country( $ip, $country_code ) {
		return $this->get_country_code_by_ip( $ip ) == $country_code;
	}

	/**
	 * Returns the country code assigned to the specified IP, or null if the country code cannot be obtained.
	 *
	 * @param string $ip
	 *
	 * @return string|null
	 */
	private function get_country_code_by_ip( $ip ) {
		$country_code = $this->get_country_code_by_ip_maxmind( $ip );
		if ( ! empty( $country_code ) && $country_code != '-' ) {
			return $country_code;
		}

		$country_code = $this->get_country_code_by_ip_ip2location( $ip );
		if ( ! empty( $country_code ) && $country_code != '-' ) {
			return $country_code;
		}

		if ( $this->use_remote_services ) {
			$country_code = $this->get_country_code_by_ip_remote_ip2c( $ip );
			if ( ! empty( $country_code ) && $country_code != 'ZZ' ) {
				return $country_code;
			}
		}

		return null;
	}

	/**
	 * @param string $ip
	 *
	 * @return string|null
	 */
	private function get_country_code_by_ip_maxmind( $ip ) {
		$db_file = $this->get_db_file( 'maxmind' );

		if ( $db_file ) {
			require_once dirname( __FILE__ ) . '/libraries/MaxMind/MaxMind_Db_Reader.php';

			try {
				$reader = new MaxMind_Db_Reader( $db_file );
				$record = $reader->get( $ip );
				if ( ! empty( $record ) && ! empty( $record['country'] ) && ! empty( $record['country']['iso_code'] ) ) {
					return $record['country']['iso_code'];
				}
			} catch ( Exception $e ) {
			}
		}

		return null;
	}

	/**
	 * @param string $ip
	 *
	 * @return string|null
	 */
	private function get_country_code_by_ip_ip2location( $ip ) {
		$db_file = $this->get_db_file( 'ip2location' );

		if ( $db_file ) {
			require_once dirname( __FILE__ ) . '/libraries/IP2Location/IP2Location.php';

			try {
				$reader = new IP2Location( $db_file );

				return $reader->lookup( $ip, IP2Location::COUNTRY_CODE );
			} catch ( Exception $e ) {
			}
		}

		return null;
	}

	/**
	 * @param string $ip
	 *
	 * @return string|null
	 */
	private function get_country_code_by_ip_remote_ip2c( $ip ) {
		$parts = explode( ';', wp_remote_retrieve_body( wp_remote_get( 'http://ip2c.org/' . $ip, array(
			'timeout' => $this->request_timeout_seconds
		) ) ) );

		return empty( $parts[1] ) ? null : $parts[1];
	}

	/**
	 * Returns an absolute path to the database file required by the specified service.
	 *
	 * @param string $service
	 *
	 * @return string
	 */
	private function get_db_file( $service ) {
		$file = dirname( __FILE__ ) . '/' . $this->db_files[ $service ];

		return is_readable( $file ) ? $file : null;
	}

	/**
	 * Returns all possible IPs assigned to the current visitor.
	 *
	 * @return string[]
	 */
	private function get_current_ips() {
		$ips = array( $_SERVER['REMOTE_ADDR'] );

		if ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
			$ips[] = $_SERVER['HTTP_X_FORWARDED_FOR'];

			return $ips;
		}

		return $ips;
	}
}