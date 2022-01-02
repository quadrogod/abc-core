<?php

namespace Quadrogod\Abc\Core\Models\Traits;

trait HasVisibility
{
    protected string $visibilityField = 'display';

    private function visibility($query, $visible = null)
    {
        if ($visible !== null) {
            return $query->where($this->visibilityField, boolval($visible));
        }
        //
        return $query;
    }

    public function scopeVisibleAll($query)
    {
        return $this->visibility($query, null);
    }

    public function scopeVisible($query)
    {
        return $this->visibility($query, true);
    }

    public function scopeInvisible($query)
    {
        return $this->visibility($query, false);
    }
}
