<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ChirpPolicy
{
    /**
     * Tentukan apakah user boleh mengupdate chirp.
     */
    public function update(User $user, Chirp $chirp): bool
    {
        // Logika: Hanya pemilik chirp yang boleh mengedit
        return $chirp->user()->is($user);
    }

    /**
     * Tentukan apakah user boleh menghapus chirp.
     */
    public function delete(User $user, Chirp $chirp): bool
    {
        // Logika: Gunakan aturan yang sama dengan update
        return $this->update($user, $chirp);
    }
}