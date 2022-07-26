$("#form_Ticket").validate({
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
	created_id: {
		string: true
	},
	modified_id: {
		string: true
	},
	owner_id: {
		string: true
	},
	Titel: {
		string: true,
		maxlength: 50
	},
	datum: {
		string: true
	},
	Bemerkung: {
		string: true,
		maxlength: 50
	},
	Frist: {
		string: true
	},
	Status: {
	},
	Kategorie: {
	},
	Priorität: {
	},
	Anhang: {
		string: true
	},
	_TBKoordinator: {
		string: true,
		required: true
	},
	_TBMitarbeiter: {
		string: true,
		required: true
	},
	Status_literal: {
		string: true,
		maxlength: 50
	},
	Kategorie_literal: {
		string: true,
		maxlength: 50
	},
	Priorität_literal: {
		string: true,
		maxlength: 50
	},
	_TBKoordinator_identifier: {
		string: true,
		maxlength: 50
	},
	_TBMitarbeiter_identifier: {
		string: true,
		maxlength: 50
	}
}
});
