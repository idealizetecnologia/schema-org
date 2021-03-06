<?php

namespace Spatie\SchemaOrg;

/**
 * Organization: Sports team.
 *
 * @see http://schema.org/SportsTeam
 */
class SportsTeam extends SportsOrganization
{
    /**
     * A person that acts in a coaching role for a sports team.
     *
     * @param Person|Person[] $coach
     *
     * @return static
     *
     * @see http://schema.org/coach
     */
    public function coach($coach)
    {
        return $this->setProperty('coach', $coach);
    }

    /**
     * A person that acts as performing member of a sports team; a player as
     * opposed to a coach.
     *
     * @param Person|Person[] $athlete
     *
     * @return static
     *
     * @see http://schema.org/athlete
     */
    public function athlete($athlete)
    {
        return $this->setProperty('athlete', $athlete);
    }

}
