<?php

namespace SisCad\Repositories;

use SisCad\Meeting;

class MeetingRepository
{
	private $meeting;

	public function __construct(Meeting $meeting)
	{
		$this->meeting = $meeting;
	}

	public function allMeetings()
	{
		return $this->meeting
			->orderBy('description', 'asc')
			->get();
	}

	public function findMeetingById($id)
    {
        return $this->meeting->find($id);
    }

    public function storeMeeting($input)
    {
        $meeting = $this->meeting->fill($input);
        $meeting->save();
    }
}