<?php namespace AjdAddRules\Rules\SubdivisionCode;

use AJD_validation\Contracts\Abstract_search;

class Ph_subdivision_code_rule extends Abstract_search
{
	public $haystack = array(
		'00', // National Capital Region
		'01', // Ilocos
		'02', // Cagayan Valley
		'03', // Central Luzon
		'05', // Bicol
		'06', // Western Visayas
		'07', // Central Visayas
		'08', // Eastern Visayas
		'09', // Zamboanga Peninsula
		'10', // Northern Mindanao
		'11', // Davao
		'12', // Soccsksargen
		'13', // Caraga
		'14', // Autonomous Region in Muslim Mindanao
		'15', // Cordillera Administrative Region
		'40', // Calabarzon
		'41', // Mimaropa
		'ABR', // Abra
		'AGN', // Agusan del Norte
		'AGS', // Agusan del Sur
		'AKL', // Aklan
		'ALB', // Albay
		'ANT', // Antique
		'APA', // Apayao
		'AUR', // Aurora
		'BAN', // Bataan
		'BAS', // Basilan
		'BEN', // Benguet
		'BIL', // Biliran
		'BOH', // Bohol
		'BTG', // Batangas
		'BTN', // Batanes
		'BUK', // Bukidnon
		'BUL', // Bulacan
		'CAG', // Cagayan
		'CAM', // Camiguin
		'CAN', // Camarines Norte
		'CAP', // Capiz
		'CAS', // Camarines Sur
		'CAT', // Catanduanes
		'CAV', // Cavite
		'CEB', // Cebu
		'COM', // Compostela Valley
		'DAO', // Davao Oriental
		'DAS', // Davao del Sur
		'DAV', // Davao del Norte
		'DIN', // Dinagat Islands
		'EAS', // Eastern Samar
		'GUI', // Guimaras
		'IFU', // Ifugao
		'ILI', // Iloilo
		'ILN', // Ilocos Norte
		'ILS', // Ilocos Sur
		'ISA', // Isabela
		'KAL', // Kalinga
		'LAG', // Laguna
		'LAN', // Lanao del Norte
		'LAS', // Lanao del Sur
		'LEY', // Leyte
		'LUN', // La Union
		'MAD', // Marinduque
		'MAG', // Maguindanao
		'MAS', // Masbate
		'MDC', // Mindoro Occidental
		'MDR', // Mindoro Oriental
		'MOU', // Mountain Province
		'MSC', // Misamis Occidental
		'MSR', // Misamis Oriental
		'NCO', // North Cotabato
		'NEC', // Negros Occidental
		'NER', // Negros Oriental
		'NSA', // Northern Samar
		'NUE', // Nueva Ecija
		'NUV', // Nueva Vizcaya
		'PAM', // Pampanga
		'PAN', // Pangasinan
		'PLW', // Palawan
		'QUE', // Quezon
		'QUI', // Quirino
		'RIZ', // Rizal
		'ROM', // Romblon
		'SAR', // Sarangani
		'SCO', // South Cotabato
		'SIG', // Siquijor
		'SLE', // Southern Leyte
		'SLU', // Sulu
		'SOR', // Sorsogon
		'SUK', // Sultan Kudarat
		'SUN', // Surigao del Norte
		'SUR', // Surigao del Sur
		'TAR', // Tarlac
		'TAW', // Tawi-Tawi
		'WSA', // Western Samar
		'ZAN', // Zamboanga del Norte
		'ZAS', // Zamboanga del Sur
		'ZMB', // Zambales
		'ZSI', // Zamboanga Sibugay
	);

	public $identical 	= TRUE;
}