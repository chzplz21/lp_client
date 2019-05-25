
  @foreach ($allCustomers as $customer)
    <tr>
      <td style = "display: table-cell">

        @for($i=0; $i<$customer->parentCount; $i++)
          <span class='pull-left padded-sm text-muted'><i class="fas fa-level-up-alt fa-rotate-90"></i></span>
        @endfor

        <a href ="/customers/{{$customer->id}}">{{$customer->name}}</a>
        <br>
        @isset($customer->parent_name)
        <span class='small text-muted'>
          Sub customer of <a href = "/customers/{{$customer->parent_id}}">{{$customer->parent_name}}</a>
        </span>
        @endisset


      </td>
      <td style = "display: table-cell">
        {{$customer->phone}}
      </td>
      <td style = "display: table-cell">
        {{$customer->shipping_address}}
      </td>
      <td style = "display: table-cell">
        {{$customer->billing_address}}
      </td>
      <td style = "display: table-cell">
        <a  href='/customers/{{$customer->id}}' class='btn btn-icon btn-xs btn-primary pull-right'><i class='fas fa-search'></i></a>

      </td>
    </tr>

  @endforeach

  </table>

</div>
