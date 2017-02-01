
result = Braintree::Subscription.create(
  :payment_method_token => "the_token",
  :plan_id => "the_plan_id",
  :discount => {
    :add => [
      {
        :inherited_from_id => "add_on_id_1",
      }
    ]
  }
)
