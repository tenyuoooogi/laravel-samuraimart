
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model





 def avg_score_percentage
   unless self.comments.empty?
     comments.average(:product_id).round(1).to_f*100/5
   else
     0.0
   end
 end
end

