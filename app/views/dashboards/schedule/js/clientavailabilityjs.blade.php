<script>
$('#clientavailability').fullCalendar({
header:{
    left: 'prev,next,today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay'
    },
defaultDate: '2014-11-12',
businessHours: true,
editable: true,
events:  [
				{
					title: 'Business Lunch',
					start: '2014-11-03T13:00:00',
					constraint: 'businessHours'
				},
				{
					title: 'Meeting',
					start: '2014-11-13T11:00:00',
					constraint: 'availableForMeeting', // defined below
					color: '#257e4a'
				},
				{
					title: 'Conference',
					start: '2014-11-18',
					end: '2014-11-20'
				},
				{
					title: 'Party',
					start: '2014-11-29T20:00:00'
				},

				// areas where "Meeting" must be dropped
				{
					id: 'availableForMeeting',
					start: '2014-11-11T10:00:00',
					end: '2014-11-11T16:00:00',
					rendering: 'background'
				},
				{
					id: 'availableForMeeting',
					start: '2014-11-13T10:00:00',
					end: '2014-11-13T16:00:00',
					rendering: 'background'
				},

				// red areas where no events can be dropped
				{
					start: '2014-11-24',
					end: '2014-11-28',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					start: '2014-11-06',
					end: '2014-11-08',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				}
			]
});

</script>