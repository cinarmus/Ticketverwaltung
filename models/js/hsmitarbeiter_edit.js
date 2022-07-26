$("#form_HSMitarbeiter").validate({
rules: {
	id: {
	},
	c_ts: {
		string: true
	},
	m_ts: {
		string: true
	},
	identifier: {
		string: true,
		maxlength: 50
	},
	Name: {
	},
	Adresse: {
	},
	_User_uid: {
		string: true
	},
	Name_Vorname: {
		string: true,
		maxlength: 50
	},
	Name_Nachname: {
		string: true,
		maxlength: 50
	},
	Adresse_Straße: {
		string: true,
		maxlength: 50
	},
	Adresse_PLZ: {
		integer: true,
		digits: true
	},
	Adresse_Ort: {
		string: true,
		maxlength: 50
	},
	_User_uid_identifier: {
		string: true,
		maxlength: 50
	}
}
});
