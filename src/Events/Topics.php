<?php

// Code generated from the Referalli OpenAPI document. DO NOT EDIT.
// Changes belong in the generator, which overwrites this file.

declare(strict_types=1);

namespace Referalli\Events;

/** Every webhook topic and its event class. */
final class Topics
{
    /** @var array<string, class-string<WebhookEvent>> */
    public const CLASSES = [
        'billing_event.recorded' => BillingEventRecordedEvent::class,
        'click.recorded' => ClickRecordedEvent::class,
        'commission.earned' => CommissionEarnedEvent::class,
        'commission.reversed' => CommissionReversedEvent::class,
        'commission.settled' => CommissionSettledEvent::class,
        'credit.redeemed' => CreditRedeemedEvent::class,
        'customer.aliased' => CustomerAliasedEvent::class,
        'deal.submitted' => DealSubmittedEvent::class,
        'dispute.resolved' => DisputeResolvedEvent::class,
        'fraud.case_opened' => FraudCaseOpenedEvent::class,
        'partner.applied' => PartnerAppliedEvent::class,
        'partner.approved' => PartnerApprovedEvent::class,
        'partner.enrolled' => PartnerEnrolledEvent::class,
        'partner.level_up' => PartnerLevelUpEvent::class,
        'payout.cancelled' => PayoutCancelledEvent::class,
        'payout.failed' => PayoutFailedEvent::class,
        'payout.scheduled' => PayoutScheduledEvent::class,
        'payout.sent' => PayoutSentEvent::class,
        'payout.submitted' => PayoutSubmittedEvent::class,
        'privacy.request_completed' => PrivacyRequestCompletedEvent::class,
        'referee_reward.earned' => RefereeRewardEarnedEvent::class,
        'referral.approved' => ReferralApprovedEvent::class,
        'referral.created' => ReferralCreatedEvent::class,
        'referral.held' => ReferralHeldEvent::class,
        'referral.paused' => ReferralPausedEvent::class,
        'referral.reassigned' => ReferralReassignedEvent::class,
        'referral.rejected' => ReferralRejectedEvent::class,
        'referral.resumed' => ReferralResumedEvent::class,
        'referral.voided' => ReferralVoidedEvent::class,
        'roi.pattern_detected' => RoiPatternDetectedEvent::class,
        'roi.payback_reached' => RoiPaybackReachedEvent::class,
        'tax.form_delivered' => TaxFormDeliveredEvent::class,
        'webhook_endpoint.disabled' => WebhookEndpointDisabledEvent::class,
        'webhook_endpoint.failing' => WebhookEndpointFailingEvent::class,
        'webhook_endpoint.recovered' => WebhookEndpointRecoveredEvent::class,
    ];

    public const ALL = [
        'billing_event.recorded',
        'click.recorded',
        'commission.earned',
        'commission.reversed',
        'commission.settled',
        'credit.redeemed',
        'customer.aliased',
        'deal.submitted',
        'dispute.resolved',
        'fraud.case_opened',
        'partner.applied',
        'partner.approved',
        'partner.enrolled',
        'partner.level_up',
        'payout.cancelled',
        'payout.failed',
        'payout.scheduled',
        'payout.sent',
        'payout.submitted',
        'privacy.request_completed',
        'referee_reward.earned',
        'referral.approved',
        'referral.created',
        'referral.held',
        'referral.paused',
        'referral.reassigned',
        'referral.rejected',
        'referral.resumed',
        'referral.voided',
        'roi.pattern_detected',
        'roi.payback_reached',
        'tax.form_delivered',
        'webhook_endpoint.disabled',
        'webhook_endpoint.failing',
        'webhook_endpoint.recovered',
    ];
}
