<?php

use Faker\Factory as Faker;
use App\Models\Ticket;
use App\Repositories\TicketRepository;

trait MakeTicketTrait
{
    /**
     * Create fake instance of Ticket and save it in database
     *
     * @param array $ticketFields
     * @return Ticket
     */
    public function makeTicket($ticketFields = [])
    {
        /** @var TicketRepository $ticketRepo */
        $ticketRepo = App::make(TicketRepository::class);
        $theme = $this->fakeTicketData($ticketFields);
        return $ticketRepo->create($theme);
    }

    /**
     * Get fake instance of Ticket
     *
     * @param array $ticketFields
     * @return Ticket
     */
    public function fakeTicket($ticketFields = [])
    {
        return new Ticket($this->fakeTicketData($ticketFields));
    }

    /**
     * Get fake data of Ticket
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTicketData($ticketFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'reporter_id' => $fake->word,
            'creator_user_id' => $fake->randomDigitNotNull,
            'parent_ticket_id' => $fake->word,
            'ticket_status_id' => $fake->randomDigitNotNull,
            'ticket_priority_id' => $fake->randomDigitNotNull,
            'ticket_source_id' => $fake->randomDigitNotNull,
            'ticket_type_id' => $fake->randomDigitNotNull,
            'title' => $fake->word,
            'description' => $fake->text,
            'free_string_1' => $fake->word,
            'free_string_2' => $fake->word,
            'free_string_3' => $fake->word,
            'free_string_4' => $fake->word,
            'free_string_5' => $fake->word,
            'free_string_6' => $fake->word,
            'free_string_7' => $fake->word,
            'free_string_8' => $fake->word,
            'free_string_9' => $fake->word,
            'free_string_10' => $fake->word,
            'free_string_11' => $fake->word,
            'free_string_12' => $fake->word,
            'free_string_13' => $fake->word,
            'free_string_14' => $fake->word,
            'free_string_15' => $fake->word,
            'free_string_16' => $fake->word,
            'free_string_17' => $fake->word,
            'free_string_18' => $fake->word,
            'free_string_19' => $fake->word,
            'free_string_20' => $fake->word,
            'free_text_1' => $fake->text,
            'free_text_2' => $fake->text,
            'free_text_3' => $fake->text,
            'free_text_4' => $fake->text,
            'free_text_5' => $fake->text,
            'free_text_6' => $fake->text,
            'free_text_7' => $fake->text,
            'free_text_8' => $fake->text,
            'free_text_9' => $fake->text,
            'free_text_10' => $fake->text,
            'free_datetime_1' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_2' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_3' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_4' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_5' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_6' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_7' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_8' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_9' => $fake->date('Y-m-d H:i:s'),
            'free_datetime_10' => $fake->date('Y-m-d H:i:s'),
            'free_date_1' => $fake->word,
            'free_date_2' => $fake->word,
            'free_date_3' => $fake->word,
            'free_date_4' => $fake->word,
            'free_date_5' => $fake->word,
            'free_date_6' => $fake->word,
            'free_date_7' => $fake->word,
            'free_date_8' => $fake->word,
            'free_date_9' => $fake->word,
            'free_date_10' => $fake->word,
            'free_integer_1' => $fake->randomDigitNotNull,
            'free_integer_2' => $fake->randomDigitNotNull,
            'free_integer_3' => $fake->randomDigitNotNull,
            'free_integer_4' => $fake->randomDigitNotNull,
            'free_integer_5' => $fake->randomDigitNotNull,
            'free_integer_6' => $fake->randomDigitNotNull,
            'free_integer_7' => $fake->randomDigitNotNull,
            'free_integer_8' => $fake->randomDigitNotNull,
            'free_integer_9' => $fake->randomDigitNotNull,
            'free_integer_10' => $fake->randomDigitNotNull,
            'free_integer_11' => $fake->randomDigitNotNull,
            'free_integer_12' => $fake->randomDigitNotNull,
            'free_integer_13' => $fake->randomDigitNotNull,
            'free_integer_14' => $fake->randomDigitNotNull,
            'free_integer_15' => $fake->randomDigitNotNull,
            'free_integer_16' => $fake->randomDigitNotNull,
            'free_integer_17' => $fake->randomDigitNotNull,
            'free_integer_18' => $fake->randomDigitNotNull,
            'free_integer_19' => $fake->randomDigitNotNull,
            'free_integer_20' => $fake->randomDigitNotNull,
            'free_array_1' => $fake->text,
            'free_array_2' => $fake->text,
            'free_array_3' => $fake->text,
            'free_array_4' => $fake->text,
            'free_array_5' => $fake->text,
            'free_array_6' => $fake->text,
            'free_array_7' => $fake->text,
            'free_array_8' => $fake->text,
            'free_array_9' => $fake->text,
            'free_array_10' => $fake->text,
            'status_changed_at' => $fake->date('Y-m-d H:i:s'),
            'overdue_at' => $fake->date('Y-m-d H:i:s'),
            'closed_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s'),
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $ticketFields);
    }
}
