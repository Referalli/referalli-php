<?php

// Code generated from the Referalli OpenAPI document. DO NOT EDIT.
// Changes belong in the generator, which overwrites this file.

declare(strict_types=1);

namespace Referalli;

/**
 * Shapes of every Referalli API object, as PHPStan/Psalm type aliases.
 * Responses are associative arrays matching these shapes.
 *
 * @phpstan-type Ok array{ok: bool}
 * @phpstan-type OkStatus array{ok: bool, status: string}
 * @phpstan-type AmountsValueItem array{currency: string, amountMinor: int}
 * @phpstan-type Amounts list<AmountsValueItem>
 * @phpstan-type Balance array{currency: string, pending: int, approved: int, paid: int, reversed: int}
 * @phpstan-type ProgramSettingsRiskPolicy array{holdBotScore: float|int, holdDisposableEmail: bool, holdVelocity: int, holdUnverifiedEmail: bool, holdSelfReferral: bool, holdRiskScore: float|int, holdHighRiskLevel: bool}
 * @phpstan-type ProgramSettingsWidget array{autoEnroll: bool, destinationUrl: string|null}
 * @phpstan-type ProgramSettingsMobileAppOption1IosOption1 array{teamId: string, bundleId: string}
 * @phpstan-type ProgramSettingsMobileAppOption1AndroidOption1 array{packageName: string, sha256CertFingerprints: list<string>}
 * @phpstan-type ProgramSettingsMobileAppOption1 array{ios?: ProgramSettingsMobileAppOption1IosOption1|null, android?: ProgramSettingsMobileAppOption1AndroidOption1|null}
 * @phpstan-type ProgramSettings array{probabilisticPolicy: string, selfReferralPolicy: 'review'|'reject', splitCommissions: bool, utmTemplate: array<string, string>, allowPaidSearch: bool, challengeLinks: bool, settlement: 'payout'|'merchant_credit', riskPolicy: ProgramSettingsRiskPolicy, widget: ProgramSettingsWidget, refereeReward?: GetOpenapiJsonResponse|null, mobileApp: ProgramSettingsMobileAppOption1|null}
 * @phpstan-type ProgramPublicPage array{pitch: string, autoApprove: bool}
 * @phpstan-type Program array{id: string, name: string, slug: string, attributionModel: 'last_click'|'first_click'|'position_based'|'time_decay', cookieWindowDays: int, signupToConversionDays: int, termsMd: string, status: 'draft'|'active'|'paused'|'archived', publicHandle: string|null, settings: ProgramSettings, publicPage: ProgramPublicPage, createdAt: string}
 * @phpstan-type Partner array{id: string, email: string, displayName: string, externalRef: string|null, status: 'active'|'suspended'|'banned'|'archived', tags: list<string>, notes: string|null, createdAt: string}
 * @phpstan-type NetworkWarning array{flagged: bool, reason: 'platform_flagged'|'banned_by_other_merchants'|null, bannedByOtherMerchants: int}
 * @phpstan-type Enrollment array{id: string, programId: string, partnerId: string, status: 'applied'|'approved'|'rejected'|'removed'}
 * @phpstan-type Link array{id: string, programId: string, partnerId: string, code: string, destinationUrl: string, shortUrl: string, clicks: int, createdAt: string}
 * @phpstan-type CreatedLink array{id: string, programId: string, partnerId: string, code: string, destinationUrl: string, shortUrl?: string}
 * @phpstan-type Coupon array{id: string, programId: string, partnerId: string, code: string, createdAt: string}
 * @phpstan-type ReasonNote array{code: 'outside_window'|'fraud_excluded'|'coupon_priority'|'email_hash_lead'|'fingerprint_fallback'|'self_referral_review', values?: array<string, float|int>}
 * @phpstan-type PayoutScheduleValueOption1 array{kind: 'monthly', dayOfMonth: int}
 * @phpstan-type PayoutScheduleValueOption2 array{kind: 'weekly', dayOfWeek: int}
 * @phpstan-type PayoutScheduleValueOption3 array{kind: 'twice_monthly', days: list<int>}
 * @phpstan-type PayoutScheduleValueOption4 array{kind: 'custom', dates: list<string>}
 * @phpstan-type PayoutSchedule PayoutScheduleValueOption1|PayoutScheduleValueOption2|PayoutScheduleValueOption3|PayoutScheduleValueOption4
 * @phpstan-type AttributionReasoning array{model?: string, consideredTouchpoints?: int, windowDays?: int, notes?: list<string>, noteCodes?: list<ReasonNote>}
 * @phpstan-type ReferralTouchCreditsItem array{partnerId: string, weight: float|int, clickId: string|null}
 * @phpstan-type Referral array{id: string, programId: string, partnerId: string, customerRef: string, source: string, matchedVia: string, confidence: float|int, clickId: string|null, linkId: string|null, status: 'active'|'pending_review'|'paused'|'void', ts: string, windowExpiresAt: string, touchCredits: list<ReferralTouchCreditsItem>, reasoning: AttributionReasoning}
 * @phpstan-type SignupReasonCode 'consent_missing'|'unknown_code'|'customer_is_partner'|'self_referral'|'banned_partner'|'archived_partner'|'flagged_partner'|'fingerprint_ignored'|'risk_hold'|'no_email_for_enroll'|'enroll_email_taken'|'enroll_code_unavailable'
 * @phpstan-type AssociateResponseReferralOption1TouchCreditsItem array{partnerId: string, weight: float|int, clickId: string|null}
 * @phpstan-type AssociateResponseReferralOption1 array{id: string, programId: string, partnerId: string, customerRef: string, source: string, matchedVia: string, confidence: float|int, clickId: string|null, linkId: string|null, status: 'active'|'pending_review'|'paused'|'void', ts: string, windowExpiresAt: string, touchCredits: list<AssociateResponseReferralOption1TouchCreditsItem>, reasoning: AttributionReasoning, orgId: string}
 * @phpstan-type AssociateResponseReasoning array{notes: list<string>}
 * @phpstan-type AssociateResponse array{referral: AssociateResponseReferralOption1|null, reasoning?: AssociateResponseReasoning}
 * @phpstan-type CommissionEvent array{id: string, programId: string, partnerId: string, referralId: string|null, type: 'earned'|'approved'|'paid'|'reversed'|'adjusted', amountMinor: int, currency: string, relatedCommissionId: string|null, holdUntil: string|null, level: int|null, memo: string|null, settlementMethod?: string|null, settlementReference?: string|null, ts: string}
 * @phpstan-type CommissionLine array{id: string, programId: string, partnerId: string, referralId: string|null, type: 'earned'|'approved'|'paid'|'reversed'|'adjusted', amountMinor: int, currency: string, relatedCommissionId: string|null, holdUntil: string|null, level: int|null, memo: string|null, settlementMethod?: string|null, settlementReference?: string|null, ts: string, billingEventId?: string|null, netMinor?: int, state?: 'pending'|'approved'|'paid', events?: list<CommissionEvent>}
 * @phpstan-type Settlement array{commissionId: string, paidEventId: string, partnerId: string, programId: string, amountMinor: int, currency: string, method: 'store_credit'|'merchant_credit', reference: string, status: 'paid'}
 * @phpstan-type CommissionRule array{id: string, programId: string, version: int, config: GetOpenapiJsonResponse, createdAt: string}
 * @phpstan-type ValueMapping array{cash?: string, creditApplied?: string, discount?: string, cost?: string, productRef?: string, unit: 'minor'|'major', version: int}
 * @phpstan-type ValueMappingPreviewValue array{cashMinor: int, creditAppliedMinor: int, discountMinor: int, costMinor?: int, productRef?: string, fields: array<string, float|int>, warnings?: list<string>, source?: 'mapping', mappingVersion?: int}
 * @phpstan-type ValueMappingPreviewWouldRecordItem array{kind: string, currency: string, confidence: string, source: string, extractionVersion: int, cashMinor?: int, creditAppliedMinor?: int, discountMinor?: int, costMinor?: int, productRef?: string}
 * @phpstan-type ValueMappingPreviewEventsItemValue array{cashMinor: int, creditAppliedMinor: int, discountMinor: int, costMinor?: int, productRef?: string, fields: array<string, float|int>, warnings?: list<string>, source?: 'mapping', mappingVersion?: int}
 * @phpstan-type ValueMappingPreviewEventsItemWouldRecordItem array{kind: string, currency: string, confidence: string, source: string, extractionVersion: int, cashMinor?: int, creditAppliedMinor?: int, discountMinor?: int, costMinor?: int, productRef?: string}
 * @phpstan-type ValueMappingPreviewEventsItem array{currency: string, value: ValueMappingPreviewEventsItemValue, wouldRecord: list<ValueMappingPreviewEventsItemWouldRecordItem>, index: int}
 * @phpstan-type ValueMappingPreview array{mappingVersion: int, currency?: string, value?: ValueMappingPreviewValue, wouldRecord?: list<ValueMappingPreviewWouldRecordItem>, events?: list<ValueMappingPreviewEventsItem>}
 * @phpstan-type BillingConnectionRotation array{inProgress: bool, previousSecretExpiresAt?: string}
 * @phpstan-type BillingConnection array{id: string, provider: string, name: string, status: 'active'|'paused', createdAt: string, webhookUrl: string, needsCredentials: bool, hasCredentials: bool, valueMapping: ValueMapping|null, rotation: BillingConnectionRotation}
 * @phpstan-type CreatedBillingConnection array{id: string, provider: string, webhookSecret: string, webhookUrl: string}
 * @phpstan-type BillingEvent array{id: string, provider: string, type: string, customerRef: string, invoiceRef: string|null, amountGross: int, tax: int, fees: int, currency: string, occurredAt: string}
 * @phpstan-type WebhookEndpointRotation array{inProgress: bool, previousSecretExpiresAt?: string}
 * @phpstan-type WebhookEndpoint array{id: string, url: string, topics: list<string>, programIds: list<string>|null, status: 'active'|'paused'|'disabled', legacySignature: bool, rotation: WebhookEndpointRotation, failingSince: string|null, disabledAt: string|null, disabledReason: string|null, createdAt: string}
 * @phpstan-type WebhookDelivery array{id: string, endpointId: string, topic: string, status: string, attempts: int, lastStatusCode: int|null, lastAttemptAt: string|null, nextAt: string|null, createdAt: string}
 * @phpstan-type PayoutProfile array{partnerId: string, method: string, payoutCurrency: string, minThresholdMinor: int, taxFormType: string|null, taxFormSubmittedAt: string|null}
 * @phpstan-type TaxProfile array{legalName: string|null, address: string|null, country: string|null, vatId: string|null, ein: string|null, domesticVatBps: int|null, viesCheck: bool, filingProvider: string, filingConnected: bool}
 * @phpstan-type TaxFilingDocumentsItem array{id: string, partnerId: string, amountMinor: int, status: string}
 * @phpstan-type TaxFiling array{id: string, taxYear: int, kind: 'original'|'correction', provider: string, providerFilingId: string|null, status: 'submitting'|'submitted'|'accepted'|'rejected', recipientCount: int, totalMinor: int, error: string|null, documents: list<TaxFilingDocumentsItem>}
 * @phpstan-type NecPreviewRecipientsItem array{partnerId: string, name: string|null, email: string|null, amountMinor: int, issues: list<'missing_tin'|'missing_address'|'fx_missing'|'already_filed'>}
 * @phpstan-type NecPreview array{taxYear: int, payerReady: bool, payerIssues: list<'missing_legal_name'|'missing_ein'|'missing_address'>, recipients: list<NecPreviewRecipientsItem>}
 * @phpstan-type InvoiceSupplier array{name: string|null, address: string|null, country: string|null, vatId: string|null}
 * @phpstan-type InvoiceCustomer array{name: string|null, address: string|null, country: string|null, vatId: string|null}
 * @phpstan-type InvoiceSelfBilling array{agreementVersion: string|null, acceptedAt: string|null}
 * @phpstan-type Invoice array{number: string, issuedAt: string, lines: list<mixed>, vatNote: string, supplier?: InvoiceSupplier, customer?: InvoiceCustomer, currency?: string, netMinor?: int, vatTreatment?: 'reverse_charge'|'domestic'|'outside_scope', vatRateBps?: int|null, vatMinor?: int, grossMinor?: int, selfBilling?: InvoiceSelfBilling}
 * @phpstan-type PayoutRunCreatedPayoutsItemFxAppliedItem array{from: string, to: string, rate: float|int, ts: string}
 * @phpstan-type PayoutRunCreatedPayoutsItem array{payoutId: string, partnerId: string, amountMinor: int, currency: string, rail: string, fxApplied: list<PayoutRunCreatedPayoutsItemFxAppliedItem>, invoice: Invoice}
 * @phpstan-type PayoutRunCreatedSkippedItem array{partnerId: string, reason: 'missing_tax_form'|'below_threshold'|'no_profile'|'kyc_unverified'|'sanctions_hold'|'partner_inactive'|'missing_fx_rate'|'self_billing_agreement_missing'}
 * @phpstan-type PayoutRunCreated array{runId: string, payouts: list<PayoutRunCreatedPayoutsItem>, skipped: list<PayoutRunCreatedSkippedItem>}
 * @phpstan-type PayoutRun array{id: string, status: string, summary: GetOpenapiJsonResponse|null, createdAt: string, executedAt: string|null}
 * @phpstan-type Payout array{id: string, runId: string, partnerId: string, amountMinor: int, currency: string, status: string, rail: string, railRef: string|null, failureReason: string|null, sentAt: string|null}
 * @phpstan-type FxRate array{base: string, quote: string, rate: string, effectiveAt: string, source: string, scope: 'org'|'platform', retiredAt: string|null}
 * @phpstan-type Org array{id: string, name: string, plan: string, settings: GetOpenapiJsonResponse, trackingToken: string, payoutKycRequired: bool, livemode: bool, liveOrgId?: string}
 * @phpstan-type Member array{userId: string, role: 'owner'|'admin'|'finance'|'analyst'|'support', email: string, name: string|null}
 * @phpstan-type IssuedApiKey array{id: string, key: string, scopes: list<string>, publishable: bool, allowedOrigins: list<string>, apiVersion: string, livemode: bool, owner: string|null, expiresAt: string|null, pairId: string|null}
 * @phpstan-type ApiKeyCreatedByOption1 array{type: 'api_key'|'user', id: string}
 * @phpstan-type ApiKey array{id: string, name: string, prefix: string, scopes: list<string>, apiVersion: string, publishable: bool, allowedOrigins: list<string>, livemode: bool, owner: string|null, pairId: string|null, createdBy: ApiKeyCreatedByOption1|null, expiresAt: string|null, expired: bool, lastUsedAt: string|null, createdAt: string, revokedAt: string|null}
 * @phpstan-type AuthConnectionRotation array{inProgress: bool, previousSecretExpiresAt?: string}
 * @phpstan-type AuthConnection array{id: string, provider: 'clerk'|'supabase'|'workos'|'generic'|'atlas'|'custom', programId: string, name: string, status: string, createdAt: string, rotation: AuthConnectionRotation, instanceId?: string|null, autoEnrollUsers?: bool, destinationUrl?: string|null, signatureVersion?: 'v1+v2'|'v2', requiresV2?: bool}
 * @phpstan-type CreatedAuthConnection array{id: string, provider: string, secret: string, webhookUrl?: string, metadataKeys?: array<string, string>, programId?: string, instanceId?: string, autoEnrollUsers?: bool, destinationUrl?: string|null, signupsUrl?: string, eraseUrl?: string, exportUrl?: string}
 * @phpstan-type FraudCase array{id: string, partnerId: string|null, referralId: string|null, kind: string, status: string, evidence: GetOpenapiJsonResponse|null, action: string|null, createdAt: string, resolvedAt: string|null}
 * @phpstan-type CustomerExport array{customerRef: string, referrals: list<GetOpenapiJsonResponse>, associations: list<GetOpenapiJsonResponse>, identityLinks: list<GetOpenapiJsonResponse>, billingEvents: list<GetOpenapiJsonResponse>, conversionEvents: list<GetOpenapiJsonResponse>}
 * @phpstan-type PartnerExport array{partner: GetOpenapiJsonResponse, enrollments: list<GetOpenapiJsonResponse>, links: list<GetOpenapiJsonResponse>, coupons: list<GetOpenapiJsonResponse>, payoutProfile: GetOpenapiJsonResponse|null, commissionEvents: list<GetOpenapiJsonResponse>, payouts: list<GetOpenapiJsonResponse>}
 * @phpstan-type PrivacyRequest array{id: string, type: 'access'|'erasure', subject: GetOpenapiJsonResponse, status: 'pending'|'completed'|'failed', error: string|null, createdAt: string, completedAt: string|null, resultUrl?: string, result?: GetOpenapiJsonResponse}
 * @phpstan-type GraphReferral array{referralId: string, customerRef: string, status: string, matchedVia: string, ts: string, revenue: Amounts, commission: Amounts, partner: GraphPartner|null}
 * @phpstan-type GraphPartner array{partnerId: string, displayName: string, email: string, externalRef: string|null, status: string, commission: Amounts, referrals: list<GraphReferral>}
 * @phpstan-type CreatorProfileStats array{programs: int, clicks: int, referrals: int, repeatPayerRate: float|int|null}
 * @phpstan-type CreatorProfile array{accountId: string, name: string|null, email?: string, published: bool, headline: string, bio: string, categories: list<string>, languages: list<string>, country: string, channels: list<GetOpenapiJsonResponse>, website: string, minAudience: int, acceptsInvites: bool, audience: GetOpenapiJsonResponse, engagementBps: int, stats: CreatorProfileStats, invited?: bool}
 * @phpstan-type EmailSettings array{provider: 'resend'|'brevo'|'postmark'|null, hasApiKey: bool, fromAddress: string|null, fromName: string|null, replyTo: string|null, defaultLocale: string, logoUrl: string|null, primaryColor: string|null, domainStatus: 'unknown'|'pending'|'verified'|'failed', domainCheckedAt: string|null}
 * @phpstan-type EmailRendered array{locale: string, subject: string, text: string, html: string, source: 'override'|'default'}
 * @phpstan-type Notification array{id: string, topic: string, message: string, data: GetOpenapiJsonResponse|null, readAt: string|null, createdAt: string}
 * @phpstan-type Passport array{claims: GetOpenapiJsonResponse, signature: string, algorithm: 'ed25519', publicKey: string}
 * @phpstan-type IncidentUpdatesItem array{id: string, body: string, state: 'investigating'|'identified'|'monitoring'|'resolved', createdAt: string}
 * @phpstan-type Incident array{id: string, title: string, state: 'investigating'|'identified'|'monitoring'|'resolved', severity: 'notice'|'minor'|'major'|'critical'|'maintenance', body: string, components: list<string>, startedAt: string, resolvedAt: string|null, updatedAt: string, updates: list<IncidentUpdatesItem>}
 * @phpstan-type RetentionPolicy array{clicks: int|null, visits: int|null, billingPayloads: int|null, webhookDeliveries: int|null, notifications: int|null, auditLog: int|null}
 * @phpstan-type RetentionLimitsValue array{minDays: int, defaultDays: int|null}
 * @phpstan-type RetentionLastRunOption1 array{at: string, result: GetOpenapiJsonResponse}
 * @phpstan-type Retention array{policy: RetentionPolicy, limits: array<string, RetentionLimitsValue>, lastRun: RetentionLastRunOption1|null}
 * @phpstan-type PartnerGroupBaseOption1Option1 array{kind: 'percent', bps: int}
 * @phpstan-type PartnerGroupBaseOption1Option2 array{kind: 'fixed', amountMinor: int, currency: string}
 * @phpstan-type PartnerGroup array{id: string, programId: string, name: string, base: PartnerGroupBaseOption1Option1|PartnerGroupBaseOption1Option2|null, holdDays: int|null, minThresholdMinor: int|null, payoutCurrency: string|null, onboardingMessage: string|null, onboardingChecklist: list<string>, members?: int, archivedAt: string|null, createdAt: string}
 * @phpstan-type PromotionEffectOption1BaseOption1 array{kind: 'percent', bps: int}
 * @phpstan-type PromotionEffectOption1BaseOption2 array{kind: 'fixed', amountMinor: int, currency: string}
 * @phpstan-type PromotionEffectOption1 array{kind: 'replace', base: PromotionEffectOption1BaseOption1|PromotionEffectOption1BaseOption2}
 * @phpstan-type PromotionEffectOption2 array{kind: 'boost', bps: int}
 * @phpstan-type Promotion array{id: string, programId: string, name: string, groupId: string|null, effect: PromotionEffectOption1|PromotionEffectOption2, startsAt: string, endsAt: string, endedAt: string|null, status: 'scheduled'|'active'|'ended', createdAt: string}
 * @phpstan-type IntegrationConnection array{id: string, kind: 'hubspot'|'segment', status: 'active'|'paused'|'error', config: GetOpenapiJsonResponse, hasCredential: bool, lastError: string|null, lastSuccessAt: string|null, pausedUntil: string|null, createdAt: string, updatedAt: string}
 * @phpstan-type IntegrationDelivery array{id: string, kind: 'zapier'|'hubspot'|'segment', targetId: string, eventId: string, topic: string, status: 'pending'|'sent'|'failed'|'skipped', attempts: int, nextAt: string, lastError: string|null, sentAt: string|null, createdAt: string}
 * @phpstan-type ZapierHook array{id: string, event: string, target_url: string, createdAt: string}
 * @phpstan-type RoiIncrementalTreatment array{n: int, cashAfterPerReferralMinor: int, profitAfterPerReferralMinor: int|null}
 * @phpstan-type RoiIncrementalControl array{n: int, cashAfterPerReferralMinor: int, profitAfterPerReferralMinor: int|null}
 * @phpstan-type RoiIncrementalExcludedReferrals array{unrecorded: int, treatmentWithoutCredit: int, controlWithCredit: int}
 * @phpstan-type RoiIncrementalExcludedItem array{eventId: string, currency: string, reason: 'no_fx_rate'}
 * @phpstan-type RoiIncremental array{currency: string, windowDays: int, holdoutBps: int, treatment: RoiIncrementalTreatment, control: RoiIncrementalControl, liftMinorPerReferral: int, liftProfitMinorPerReferral: int|null, creditCostPerReferralMinor: int, incrementalRoi: float|int|null, eligible: bool, reason?: 'no_holdout'|'too_few'|'no_recorded_groups', unrecordedReferrals: int, excludedReferrals: RoiIncrementalExcludedReferrals, excluded: list<RoiIncrementalExcludedItem>}
 * @phpstan-type RoiProjectionCohortsItem array{programId: string|null, role: 'referee'|'referrer', eligible: bool, reason?: 'not_enough_history', closedGrants: int, openGrants: int, medianCrossingDay?: int|null, curveThroughDay?: int, noCrossingReason?: 'cohort_not_paid_back'|'insufficient_horizon', behindCohort?: int}
 * @phpstan-type RoiProjection array{label: 'projection', eligible: bool, reason?: 'not_enough_history', closedGrants: int, openGrants: int, projectedGrants: int, expectedPaidBackShareBps: int|null, medianExpectedPaybackDays: int|null, cohorts: list<RoiProjectionCohortsItem>}
 * @phpstan-type RoiSummaryCoverage array{creditAppliedReportedBps: int|null, marginCoveredBps: int|null, inferredShareBps: int|null}
 * @phpstan-type RoiSummaryTargetOption1 array{targetRoiBps: int, status: 'on_track'|'below'|'unknown'}
 * @phpstan-type RoiSummary array{currency: string, creditCostMinor: int, cashAfterMinor: int, profitAfterMinor: int|null, netMinor: int|null, roi: float|int|null, paidBackShareBps: int|null, medianPaybackDays: float|int|null, grants: int, profitSources: array<string, int>, coverage: RoiSummaryCoverage, outstandingCreditMinor: int, outstandingCostIfUsedMinor: int|null, currencies: list<string>, incremental?: RoiIncremental, projection?: RoiProjection, target?: RoiSummaryTargetOption1|null}
 * @phpstan-type RoiGrantMetricsExcludedItem array{eventId: string, currency: string, reason: 'no_fx_rate'}
 * @phpstan-type RoiGrantMetrics array{grantId: string, role: 'referee'|'referrer', currency: string, faceMinor: int, usedMinor: int, costMinor: int, cashAfterMinor: int, profitAfterMinor: int|null, netMinor: int|null, roi: float|int|null, paidBack: bool|null, paybackDays: int|null, profitSource: 'event'|'cost_events'|'catalog'|'program'|'org'|'none'|'mixed', inferredShareBps: int, windowDays: int, excluded: list<RoiGrantMetricsExcludedItem>}
 * @phpstan-type RoiGrant array{id: string, source: 'referee_reward'|'commission_credit'|'external'|'manual', role: 'referee'|'referrer', status: 'open'|'used'|'expired'|'revoked', customerRef: string|null, partnerId: string|null, referralId: string|null, programId: string|null, grantCurrency: string, grantedAt: string, expiresAt: string|null, currency: string, faceMinor: int, usedMinor: int, costMinor: int, cashAfterMinor: int, profitAfterMinor: int|null, netMinor: int|null, roi: float|int|null, paidBack: bool|null, paybackDays: int|null, profitSource: 'event'|'cost_events'|'catalog'|'program'|'org'|'none'|'mixed', inferredShareBps: int, windowDays: int}
 * @phpstan-type RoiPatternEntrySubject array{customerRef?: string, partnerId?: string}
 * @phpstan-type RoiPatternEntry array{subject: RoiPatternEntrySubject, programId: string|null, detail: array<string, mixed>}
 * @phpstan-type RoiTraceSubject array{type: 'customer'|'partner', id: string, customerRefs: list<string>, partnerId: string|null}
 * @phpstan-type RoiTraceEventsItem array{id: string, kind: string, occurredAt: string, amounts: array<string, string|float|int|null>, confidence: 'reported'|'extracted'|'inferred', source: string, superseded: bool, links: array<string, string|null>}
 * @phpstan-type RoiTraceRunningNetItem array{at: string, netMinor: int|null}
 * @phpstan-type RoiTraceExcludedItem array{eventId: string, currency: string, reason: 'no_fx_rate'}
 * @phpstan-type RoiTrace array{subject: RoiTraceSubject, events: list<RoiTraceEventsItem>, grants: list<RoiGrantMetrics>, runningNet: list<RoiTraceRunningNetItem>, excluded: list<RoiTraceExcludedItem>}
 * @phpstan-type AuditLogEntry array{id: string, actorType: string, actorId: string, action: string, subjectType: string, subjectId: string, data: GetOpenapiJsonResponse, createdAt: string}
 * @phpstan-type EmailTemplateEventLocalesItemDefault array{subject: string, body: string, cta: string}
 * @phpstan-type EmailTemplateEventLocalesItemOverrideOption1 array{subject: string, text: string, html: string|null, updatedAt: string}
 * @phpstan-type EmailTemplateEventLocalesItem array{locale: string, default: EmailTemplateEventLocalesItemDefault, override: EmailTemplateEventLocalesItemOverrideOption1|null}
 * @phpstan-type EmailTemplateEvent array{event: string, audience: 'partner'|'merchant', placeholders: list<string>, locales: list<EmailTemplateEventLocalesItem>}
 * @phpstan-type ErrorError array{code: string, message: string, details?: mixed, requestId?: string, docs_url: string}
 * @phpstan-type Error array{error: ErrorError}
 * @phpstan-type ClickRecordedEventData array{clickId: string, programId: string, partnerId: string, linkId: string|null}
 * @phpstan-type ClickRecordedEvent array{id: string, topic: 'click.recorded', orgId: string, livemode: bool, createdAt: string, data: ClickRecordedEventData}
 * @phpstan-type ReferralCreatedEventData array{referralId: string, programId: string, partnerId: string, partnerExternalRef: string|null, customerRef: string, status: 'active'|'pending_review'|'paused'|'void', matchedVia: string}
 * @phpstan-type ReferralCreatedEvent array{id: string, topic: 'referral.created', orgId: string, livemode: bool, createdAt: string, data: ReferralCreatedEventData}
 * @phpstan-type ReferralHeldEventData array{referralId: string, programId: string, partnerId: string, partnerExternalRef: string|null, customerRef: string, status: 'active'|'pending_review'|'paused'|'void', reasons: list<string>, caseId: string}
 * @phpstan-type ReferralHeldEvent array{id: string, topic: 'referral.held', orgId: string, livemode: bool, createdAt: string, data: ReferralHeldEventData}
 * @phpstan-type ReferralApprovedEventData array{referralId: string, programId: string, partnerId: string, partnerExternalRef: string|null, customerRef: string, status: 'active'|'pending_review'|'paused'|'void', reason?: string, caseId?: string}
 * @phpstan-type ReferralApprovedEvent array{id: string, topic: 'referral.approved', orgId: string, livemode: bool, createdAt: string, data: ReferralApprovedEventData}
 * @phpstan-type ReferralVoidedEventData array{referralId: string, programId: string, partnerId: string, partnerExternalRef: string|null, customerRef: string, status: 'active'|'pending_review'|'paused'|'void', reason?: string, caseId?: string}
 * @phpstan-type ReferralVoidedEvent array{id: string, topic: 'referral.voided', orgId: string, livemode: bool, createdAt: string, data: ReferralVoidedEventData}
 * @phpstan-type ReferralPausedEventData array{referralId: string, programId: string, partnerId: string, partnerExternalRef: string|null, customerRef: string, status: 'active'|'pending_review'|'paused'|'void'}
 * @phpstan-type ReferralPausedEvent array{id: string, topic: 'referral.paused', orgId: string, livemode: bool, createdAt: string, data: ReferralPausedEventData}
 * @phpstan-type ReferralResumedEventData array{referralId: string, programId: string, partnerId: string, partnerExternalRef: string|null, customerRef: string, status: 'active'|'pending_review'|'paused'|'void'}
 * @phpstan-type ReferralResumedEvent array{id: string, topic: 'referral.resumed', orgId: string, livemode: bool, createdAt: string, data: ReferralResumedEventData}
 * @phpstan-type ReferralReassignedEventData array{referralId: string, programId: string, partnerId: string, partnerExternalRef: string|null, customerRef: string, status: 'active'|'pending_review'|'paused'|'void', previousPartnerId: string, previousPartnerExternalRef: string|null}
 * @phpstan-type ReferralReassignedEvent array{id: string, topic: 'referral.reassigned', orgId: string, livemode: bool, createdAt: string, data: ReferralReassignedEventData}
 * @phpstan-type ReferralRejectedEventData array{programId: string, partnerId: string, customerRef: string, reason: 'self_referral'}
 * @phpstan-type ReferralRejectedEvent array{id: string, topic: 'referral.rejected', orgId: string, livemode: bool, createdAt: string, data: ReferralRejectedEventData}
 * @phpstan-type CustomerAliasedEventData array{fromCustomerRef: string, toCustomerRef: string, referralIds: list<string>, partnerId: string|null}
 * @phpstan-type CustomerAliasedEvent array{id: string, topic: 'customer.aliased', orgId: string, livemode: bool, createdAt: string, data: CustomerAliasedEventData}
 * @phpstan-type CommissionEarnedEventData array{commissionId: string, partnerId: string, programId: string, amountMinor: int, currency: string, referralId: string|null, customerRef: string|null, billingEventId: string|null, providerEventId: string|null, invoiceRef: string|null, customerExternalRef: string|null, partnerExternalRef: string|null, level: int, memo: string, basisMinor: int|null}
 * @phpstan-type CommissionEarnedEvent array{id: string, topic: 'commission.earned', orgId: string, livemode: bool, createdAt: string, data: CommissionEarnedEventData}
 * @phpstan-type CommissionReversedEventData array{commissionId: string, relatedCommissionId: string, reversalId: string, partnerId: string, programId: string, amountMinor: int, currency: string, referralId: string|null, customerRef: string|null, billingEventId: string|null, providerEventId: string|null, invoiceRef: string|null, customerExternalRef: string|null, partnerExternalRef: string|null, level: int, memo: string}
 * @phpstan-type CommissionReversedEvent array{id: string, topic: 'commission.reversed', orgId: string, livemode: bool, createdAt: string, data: CommissionReversedEventData}
 * @phpstan-type CommissionSettledEventData array{commissionId: string, partnerId: string, programId: string, referralId: string|null, amountMinor: int, currency: string, method: 'store_credit'|'merchant_credit', reference: string}
 * @phpstan-type CommissionSettledEvent array{id: string, topic: 'commission.settled', orgId: string, livemode: bool, createdAt: string, data: CommissionSettledEventData}
 * @phpstan-type PartnerAppliedEventData array{programId: string, partnerId: string, enrollmentId?: string}
 * @phpstan-type PartnerAppliedEvent array{id: string, topic: 'partner.applied', orgId: string, livemode: bool, createdAt: string, data: PartnerAppliedEventData}
 * @phpstan-type PartnerEnrolledEventData array{programId: string, partnerId: string, enrollmentId: string}
 * @phpstan-type PartnerEnrolledEvent array{id: string, topic: 'partner.enrolled', orgId: string, livemode: bool, createdAt: string, data: PartnerEnrolledEventData}
 * @phpstan-type PartnerApprovedEventData array{programId: string, partnerId: string, enrollmentId?: string}
 * @phpstan-type PartnerApprovedEvent array{id: string, topic: 'partner.approved', orgId: string, livemode: bool, createdAt: string, data: PartnerApprovedEventData}
 * @phpstan-type PartnerLevelUpEventData array{programId: string, partnerId: string, level: string, referrals: int}
 * @phpstan-type PartnerLevelUpEvent array{id: string, topic: 'partner.level_up', orgId: string, livemode: bool, createdAt: string, data: PartnerLevelUpEventData}
 * @phpstan-type PayoutScheduledEventData array{payoutId: string, partnerId: string, amountMinor: int, currency: string}
 * @phpstan-type PayoutScheduledEvent array{id: string, topic: 'payout.scheduled', orgId: string, livemode: bool, createdAt: string, data: PayoutScheduledEventData}
 * @phpstan-type PayoutSubmittedEventData array{payoutId: string, partnerId: string, amountMinor: int, currency: string}
 * @phpstan-type PayoutSubmittedEvent array{id: string, topic: 'payout.submitted', orgId: string, livemode: bool, createdAt: string, data: PayoutSubmittedEventData}
 * @phpstan-type PayoutSentEventData array{payoutId: string, partnerId: string, amountMinor: int, currency: string}
 * @phpstan-type PayoutSentEvent array{id: string, topic: 'payout.sent', orgId: string, livemode: bool, createdAt: string, data: PayoutSentEventData}
 * @phpstan-type PayoutFailedEventData array{payoutId: string, partnerId: string, reason: string}
 * @phpstan-type PayoutFailedEvent array{id: string, topic: 'payout.failed', orgId: string, livemode: bool, createdAt: string, data: PayoutFailedEventData}
 * @phpstan-type PayoutCancelledEventData array{payoutId: string, partnerId: string}
 * @phpstan-type PayoutCancelledEvent array{id: string, topic: 'payout.cancelled', orgId: string, livemode: bool, createdAt: string, data: PayoutCancelledEventData}
 * @phpstan-type TaxFormDeliveredEventData array{documentId: string, partnerId: string, taxYear: int, form: '1099-nec', corrected: bool, emailed: bool}
 * @phpstan-type TaxFormDeliveredEvent array{id: string, topic: 'tax.form_delivered', orgId: string, livemode: bool, createdAt: string, data: TaxFormDeliveredEventData}
 * @phpstan-type RefereeRewardEarnedEventData array{rewardId: string, referralId: string, programId: string, customerRef: string, customerExternalRef: string|null, kind: 'store_credit'|'coupon'|'gift_card', amountMinor: int, currency: string, code: string|null, billingEventId: string|null, commissionId: string|null}
 * @phpstan-type RefereeRewardEarnedEvent array{id: string, topic: 'referee_reward.earned', orgId: string, livemode: bool, createdAt: string, data: RefereeRewardEarnedEventData}
 * @phpstan-type CreditRedeemedEventData array{grantId: string, rewardId: string, amountMinor: int, remainingMinor: int}
 * @phpstan-type CreditRedeemedEvent array{id: string, topic: 'credit.redeemed', orgId: string, livemode: bool, createdAt: string, data: CreditRedeemedEventData}
 * @phpstan-type BillingEventRecordedEventData array{billingEventId: string, type: string, customerRef: string, currency: string, amountMinor: int}
 * @phpstan-type BillingEventRecordedEvent array{id: string, topic: 'billing_event.recorded', orgId: string, livemode: bool, createdAt: string, data: BillingEventRecordedEventData}
 * @phpstan-type RoiPaybackReachedEventData array{grantId: string, paybackDays: int, netMinor: int, currency: string}
 * @phpstan-type RoiPaybackReachedEvent array{id: string, topic: 'roi.payback_reached', orgId: string, livemode: bool, createdAt: string, data: RoiPaybackReachedEventData}
 * @phpstan-type RoiPatternDetectedEventData array{pattern: 'credit_only'|'churn_at_exhaustion'|'bonus_collector'|'negative_partner', count: int, newCount: int, sample: list<string>}
 * @phpstan-type RoiPatternDetectedEvent array{id: string, topic: 'roi.pattern_detected', orgId: string, livemode: bool, createdAt: string, data: RoiPatternDetectedEventData}
 * @phpstan-type FraudCaseOpenedEventData array{caseId: string, kind: 'self_referral'|'quality'|'ring'|'identity_risk'|'value_pattern', partnerId?: string|null, referralId?: string|null, members?: list<string>, reasons?: list<string>, pattern?: string, rejected?: bool}
 * @phpstan-type FraudCaseOpenedEvent array{id: string, topic: 'fraud.case_opened', orgId: string, livemode: bool, createdAt: string, data: FraudCaseOpenedEventData}
 * @phpstan-type DealSubmittedEventData array{dealId: string, partnerId: string, company: string}
 * @phpstan-type DealSubmittedEvent array{id: string, topic: 'deal.submitted', orgId: string, livemode: bool, createdAt: string, data: DealSubmittedEventData}
 * @phpstan-type DisputeResolvedEventData array{disputeId: string, resolution: string}
 * @phpstan-type DisputeResolvedEvent array{id: string, topic: 'dispute.resolved', orgId: string, livemode: bool, createdAt: string, data: DisputeResolvedEventData}
 * @phpstan-type PrivacyRequestCompletedEventData array{requestId: string, type: 'access'|'erasure', status: 'completed'|'failed', found?: bool}
 * @phpstan-type PrivacyRequestCompletedEvent array{id: string, topic: 'privacy.request_completed', orgId: string, livemode: bool, createdAt: string, data: PrivacyRequestCompletedEventData}
 * @phpstan-type WebhookEndpointDisabledEventData array{endpointId: string, url: string, reason: string, lastStatusCode: int|null, days: int}
 * @phpstan-type WebhookEndpointDisabledEvent array{id: string, topic: 'webhook_endpoint.disabled', orgId: string, livemode: bool, createdAt: string, data: WebhookEndpointDisabledEventData}
 * @phpstan-type PostTOrgTokenVisitResponse array{ok: bool, clickId: string|null}
 * @phpstan-type GetTOrgTokenCodesCodeResponseRefereeRewardOption1 array{kind: string, bps?: int, amountMinor?: int, capMinor?: int, currency: string, on: string}
 * @phpstan-type GetTOrgTokenCodesCodeResponse array{valid: bool, partnerDisplayName: string, refereeReward: GetTOrgTokenCodesCodeResponseRefereeRewardOption1|null}
 * @phpstan-type GetTOrgTokenWidgetMeResponseProgram array{id: string, name: string}
 * @phpstan-type GetTOrgTokenWidgetMeResponsePartner array{displayName: string}
 * @phpstan-type GetTOrgTokenWidgetMeResponseShareOption1 array{x: string, facebook: string, linkedin: string, whatsapp: string, email: string}
 * @phpstan-type GetTOrgTokenWidgetMeResponseProgress array{clicks: int, signups: int, payingCustomers: int}
 * @phpstan-type GetTOrgTokenWidgetMeResponseEarningsItem array{currency: string, pending: int, approved: int, paid: int}
 * @phpstan-type GetTOrgTokenWidgetMeResponseRefereeRewardOption1 array{kind: string, bps?: int, amountMinor?: int, capMinor?: int, currency: string, on: string}
 * @phpstan-type GetTOrgTokenWidgetMeResponse array{program: GetTOrgTokenWidgetMeResponseProgram, partner: GetTOrgTokenWidgetMeResponsePartner, code: string|null, coupon: string|null, link: string|null, share: GetTOrgTokenWidgetMeResponseShareOption1|null, progress: GetTOrgTokenWidgetMeResponseProgress, earnings: list<GetTOrgTokenWidgetMeResponseEarningsItem>, refereeReward: GetTOrgTokenWidgetMeResponseRefereeRewardOption1|null}
 * @phpstan-type GetTOrgTokenMobileResolveResponse array{matched: bool, clickId?: string, code?: string, destination?: string, programId?: string, matchType?: 'user_agent'|'device'|'ip'}
 * @phpstan-type PostTOrgTokenMobileInstallResponse array{attributed: bool, referralId: string|null, partnerId: string|null, programId: string}
 * @phpstan-type GetWellKnownAppleAppSiteAssociationResponseApplinksDetailsItemComponentsItem array{'/': string}
 * @phpstan-type GetWellKnownAppleAppSiteAssociationResponseApplinksDetailsItem array{appIDs: list<string>, components: list<GetWellKnownAppleAppSiteAssociationResponseApplinksDetailsItemComponentsItem>}
 * @phpstan-type GetWellKnownAppleAppSiteAssociationResponseApplinks array{details: list<GetWellKnownAppleAppSiteAssociationResponseApplinksDetailsItem>}
 * @phpstan-type GetWellKnownAppleAppSiteAssociationResponse array{applinks: GetWellKnownAppleAppSiteAssociationResponseApplinks}
 * @phpstan-type GetWellKnownAssetlinksJsonResponseValueItemTarget array{namespace: 'android_app', package_name: string, sha256_cert_fingerprints: list<string>}
 * @phpstan-type GetWellKnownAssetlinksJsonResponseValueItem array{relation: list<string>, target: GetWellKnownAssetlinksJsonResponseValueItemTarget}
 * @phpstan-type GetWellKnownAssetlinksJsonResponse list<GetWellKnownAssetlinksJsonResponseValueItem>
 * @phpstan-type PostAgentsRegisterResponse array{agentId: string, wallet: string, instantPayout: bool}
 * @phpstan-type PostTOrgTokenAgentAttributeResponse array{attributed: bool, referralId: string, agentWallet: string}
 * @phpstan-type PostTOrgTokenAgentNegotiateResponse array{decision: 'accept'|'counter'|'reject', rateBps?: int, counterBps?: int|null, partnerId?: string, reason: string}
 * @phpstan-type PostTOrgTokenConsentResponse array{ok: bool, customerRef: string, granted: bool}
 * @phpstan-type GetVersionsResponseVersionsItem array{version: string, released: string, changes: list<string>}
 * @phpstan-type GetVersionsResponse array{latest: string, versions: list<GetVersionsResponseVersionsItem>, deprecationPolicy: string}
 * @phpstan-type GetAuthProvidersResponseDetailsItem array{id: 'instance'|'atlasid', name: string, atlas: bool}
 * @phpstan-type GetAuthProvidersResponse array{providers: list<'instance'|'atlasid'>, details: list<GetAuthProvidersResponseDetailsItem>}
 * @phpstan-type PostAuthLogoutResponse array{ok: bool, logoutUrl: string|null}
 * @phpstan-type PostOrgsResponse array{orgId: string}
 * @phpstan-type GetMeResponseUserOption1 array{id: string, email: string, name: string|null, emailVerified: bool}
 * @phpstan-type GetMeResponseMembershipsItem array{orgId: string, role: string, roiDigest?: bool}
 * @phpstan-type GetMeResponseApiKey array{id: string, name: string, prefix: string, scopes: list<string>, apiVersion: string|null, livemode: bool, publishable: bool, owner: string|null, expiresAt: string|null}
 * @phpstan-type GetMeResponseOrg array{id: string, name: string}
 * @phpstan-type GetMeResponse array{user: GetMeResponseUserOption1|null, memberships: list<GetMeResponseMembershipsItem>, apiKey?: GetMeResponseApiKey, org?: GetMeResponseOrg}
 * @phpstan-type GetHostsCurrentResponseValueOption1Branding array{logoUrl: string, theme: array<string, string>}
 * @phpstan-type GetHostsCurrentResponseValueOption1ProgramsItem array{handle: string, name: string}
 * @phpstan-type GetHostsCurrentResponseValueOption1 array{kind: 'portal', orgId: string, orgName: string, branding: GetHostsCurrentResponseValueOption1Branding, programs: list<GetHostsCurrentResponseValueOption1ProgramsItem>}
 * @phpstan-type GetHostsCurrentResponseValueOption2 array{kind: 'link'}
 * @phpstan-type GetHostsCurrentResponseValueOption3 array{kind: 'app'}
 * @phpstan-type GetHostsCurrentResponse GetHostsCurrentResponseValueOption1|GetHostsCurrentResponseValueOption2|GetHostsCurrentResponseValueOption3
 * @phpstan-type PostMobilePurchasesResponse array{conversions: int, linesCreated: int, reversals: int}
 * @phpstan-type PatchOrgResponse array{id: string, name: string, plan: string, settings: GetOpenapiJsonResponse, payout_kyc_required: bool}
 * @phpstan-type GetOrgMembersResponse array{object: 'list', data: list<Member>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostOrgMembersResponse array{userId: string, role: string}
 * @phpstan-type PatchOrgMembersUserIdResponse array{userId: string, role: string}
 * @phpstan-type PutOrgPayoutScheduleResponse array{dayOfMonth?: int|null, schedule?: PayoutSchedule|null, nextRunDate?: string|null}
 * @phpstan-type GetOrgPayoutScheduleResponseProgramsItemOverrideOption1Option2 array{kind: 'off'}
 * @phpstan-type GetOrgPayoutScheduleResponseProgramsItem array{programId: string, name: string, override: PayoutSchedule|GetOrgPayoutScheduleResponseProgramsItemOverrideOption1Option2|null, nextRunDate: string|null}
 * @phpstan-type GetOrgPayoutScheduleResponse array{schedule: PayoutSchedule|null, nextRunDate: string|null, programs: list<GetOrgPayoutScheduleResponseProgramsItem>}
 * @phpstan-type PutProgramsIdPayoutScheduleResponseScheduleOption1Option2 array{kind: 'off'}
 * @phpstan-type PutProgramsIdPayoutScheduleResponse array{programId: string, schedule: PayoutSchedule|PutProgramsIdPayoutScheduleResponseScheduleOption1Option2|null, nextRunDate: string|null}
 * @phpstan-type PutPartnersIdVatResponse array{vatId: string|null, vatCountry: string|null, vatVerifiedAt: string|null, selfBillingAcceptedAt: string|null, selfBillingVersion: string|null}
 * @phpstan-type GetPartnerOrgsOrgIdSelfBillingResponse array{vatId: string|null, vatCountry: string|null, vatVerifiedAt: string|null, selfBillingAcceptedAt: string|null, selfBillingVersion: string|null, currentVersion: string}
 * @phpstan-type PostPartnerOrgsOrgIdSelfBillingResponse array{vatId: string|null, vatCountry: string|null, vatVerifiedAt: string|null, selfBillingAcceptedAt: string|null, selfBillingVersion: string|null, currentVersion: string}
 * @phpstan-type PutOrgTaxFilingResponse array{provider: 'test'|'tax1099', connected: bool}
 * @phpstan-type GetTax1099FilingsResponseDataItemDocumentsItem array{id: string, partnerId: string, amountMinor: int, status: string}
 * @phpstan-type GetTax1099FilingsResponseDataItem array{id: string, taxYear: int, kind: 'original'|'correction', provider: string, providerFilingId: string|null, status: 'submitting'|'submitted'|'accepted'|'rejected', recipientCount: int, totalMinor: int, error: string|null, documents: list<GetTax1099FilingsResponseDataItemDocumentsItem>, createdAt: string}
 * @phpstan-type GetTax1099FilingsResponse array{object: 'list', data: list<GetTax1099FilingsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostTax1099FilingsIdRefreshResponse array{id: string, status: 'submitting'|'submitted'|'accepted'|'rejected'}
 * @phpstan-type GetPartnerTaxDocumentsResponseDataItem array{id: string, partnerId: string, taxYear: int, form: string, amountMinor: int, status: 'pending'|'filed'|'accepted'|'rejected'|'delivered', correctionOf: string|null, deliveredAt: string|null, createdAt: string, orgId: string, orgName: string}
 * @phpstan-type GetPartnerTaxDocumentsResponse array{object: 'list', data: list<GetPartnerTaxDocumentsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetStatusResponseComponentsItem array{id: string, state: 'operational'|'degraded'|'major_outage', detail: array<string, mixed>}
 * @phpstan-type GetStatusResponse array{state: 'operational'|'degraded'|'major_outage', components: list<GetStatusResponseComponentsItem>, openIncidents: list<Incident>, checkedAt: string}
 * @phpstan-type GetStatusIncidentsResponse array{object: 'list', data: list<Incident>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetOrgReferralParamsResponse array{builtIn: list<string>, params: list<string>}
 * @phpstan-type GetProgramsResponse array{object: 'list', data: list<Program>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetProgramsIdEnrollmentsResponseDataItem array{id: string, partnerId: string, partnerEmail: string, partnerName: string, status: string, createdAt: string, networkWarning: NetworkWarning}
 * @phpstan-type GetProgramsIdEnrollmentsResponse array{object: 'list', data: list<GetProgramsIdEnrollmentsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostProgramsIdEnrollmentsEnrollmentIdApproveResponse array{id: string, status: 'approved'}
 * @phpstan-type PostProgramsIdEnrollmentsEnrollmentIdRejectResponse array{id: string, status: 'rejected'}
 * @phpstan-type GetPartnersResponse array{object: 'list', data: list<Partner>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnersIdResponse mixed
 * @phpstan-type GetPartnersIdEnrollmentsResponseDataItem array{id: string, programId: string, programName: string, status: string, groupId: string|null, createdAt: string}
 * @phpstan-type GetPartnersIdEnrollmentsResponse array{object: 'list', data: list<GetPartnersIdEnrollmentsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetProgramsIdGraphResponse mixed
 * @phpstan-type PostApiKeysResponseValueOption2 array{pairId: string, live: IssuedApiKey, test: IssuedApiKey}
 * @phpstan-type PostApiKeysResponse IssuedApiKey|PostApiKeysResponseValueOption2
 * @phpstan-type GetApiKeysResponse array{object: 'list', data: list<ApiKey>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PatchApiKeysIdResponse array{id: string, apiVersion: string, owner: string|null, expiresAt: string|null}
 * @phpstan-type DeleteApiKeysIdResponse array{ok: bool, revoked: list<string>}
 * @phpstan-type GetAuditLogsResponse array{object: 'list', data: list<AuditLogEntry>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetTestClockResponse array{now: string, offsetSeconds: int}
 * @phpstan-type PostTestClockAdvanceResponse array{now: string, offsetSeconds: int, approved: int, payoutRuns: int}
 * @phpstan-type GetTestEmailsResponseDataItem array{id: string, event: string, to: string, subject: string, text: string, html: string, createdAt: string}
 * @phpstan-type GetTestEmailsResponse array{object: 'list', data: list<GetTestEmailsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostCliDeviceCodesResponse array{deviceCode: string, userCode: string, verificationUri: string, verificationUriComplete: string, expiresIn: int, interval: int}
 * @phpstan-type PostCliDeviceCodesTokenResponse array{status: 'pending'|'approved'|'denied'|'expired'|'consumed', key?: string, orgId?: string, orgName?: string, scopes?: list<string>}
 * @phpstan-type GetCliDeviceCodesUserCodeResponse array{userCode: string, clientName: string|null, createdAt: string, expiresAt: string}
 * @phpstan-type PostCliDeviceCodesUserCodeApproveResponse array{ok: bool, keyId: string, scopes: list<string>}
 * @phpstan-type PostCliListenersResponse array{id: string, secret: string, topics: list<string>, idleTimeoutSec: int}
 * @phpstan-type GetCliListenersIdEventsResponseEventsItem array{id: string, eventId: string, topic: string, body: string, headers: array<string, string>}
 * @phpstan-type GetCliListenersIdEventsResponse array{events: list<GetCliListenersIdEventsResponseEventsItem>}
 * @phpstan-type PostCliTriggerResponseDeliveredTo array{listeners: int, endpoints: int}
 * @phpstan-type PostCliTriggerResponse array{eventId: string, topic: string, payload: GetOpenapiJsonResponse, deliveredTo: PostCliTriggerResponseDeliveredTo}
 * @phpstan-type GetCliTopicsResponse array{topics: list<string>}
 * @phpstan-type GetCliLogsResponseEntriesItem array{seq: int, requestId: string, method: string, path: string, status: int, latencyMs: int, actorType: string, actorId: string|null, ts: string}
 * @phpstan-type GetCliLogsResponse array{entries: list<GetCliLogsResponseEntriesItem>, cursor: int}
 * @phpstan-type GetLinksResponse array{object: 'list', data: list<Link>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostCouponsResponse array{id: string, code: string}
 * @phpstan-type GetCouponsResponse array{object: 'list', data: list<Coupon>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostWidgetTokensResponse array{token: string, partnerId: string, expiresAt: string}
 * @phpstan-type GetReferralsResponse array{object: 'list', data: list<Referral>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetReferralsIdJourneyResponseTouchCreditsItem array{partnerId: string, weight: float|int, clickId: string|null}
 * @phpstan-type GetReferralsIdJourneyResponseTouchpointsItem array{clickId: string, ts: string, url: string|null, linkId: string|null, fraudScore: int, eligible: bool, weight: float|int, winner: bool}
 * @phpstan-type GetReferralsIdJourneyResponse array{id: string, programId: string, partnerId: string, customerRef: string, source: string, matchedVia: string, confidence: float|int, clickId: string|null, linkId: string|null, status: 'active'|'pending_review'|'paused'|'void', ts: string, windowExpiresAt: string, touchCredits: list<GetReferralsIdJourneyResponseTouchCreditsItem>, reasoning: AttributionReasoning, touchpoints: list<GetReferralsIdJourneyResponseTouchpointsItem>}
 * @phpstan-type PostAttributionReplayResponse array{recomputed: int, changed: int}
 * @phpstan-type PostTrackEventsResponse array{clickId?: string, eventId?: string, event?: string, recorded?: bool, referralId?: string|null, duplicate?: bool, commissionId?: string|null, amountMinor?: int, currency?: string|null}
 * @phpstan-type PostCommissionRulesResponse array{id: string, programId: string, version: int, config: GetOpenapiJsonResponse}
 * @phpstan-type GetCommissionRulesResponse array{object: 'list', data: list<CommissionRule>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetCommissionsResponse array{object: 'list', data: list<CommissionEvent>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnersIdBalancesResponse array{object: 'list', data: list<Balance>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostCommissionsApproveDueResponse array{approved: int}
 * @phpstan-type PostCommissionsIdAdjustResponse array{id: string}
 * @phpstan-type PutBillingConnectionsIdSecretResponse array{id: string, provider: string, ok: bool}
 * @phpstan-type PutBillingConnectionsIdCredentialsResponse array{id: string, provider: string, ok: bool}
 * @phpstan-type GetBillingConnectionsResponse array{object: 'list', data: list<BillingConnection>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PutBillingConnectionsIdValueMappingResponse array{id: string, valueMapping: ValueMapping}
 * @phpstan-type PostBillingConnectionsIdRotateSecretResponse array{id: string, provider: string, webhookSecret: string, previousSecretExpiresAt: string}
 * @phpstan-type GetBillingEventsResponse array{object: 'list', data: list<BillingEvent>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PutPartnersIdPayoutProfileResponse array{id: string}
 * @phpstan-type PatchPartnersIdPayoutProfileResponse array{partnerId: string, method: string, payoutCurrency: string, minThresholdMinor: int}
 * @phpstan-type PostPayoutRunsIdExecuteResponse array{sent: int, submitted: int, failed: int}
 * @phpstan-type PostPayoutRunsIdCancelResponse array{cancelled: int}
 * @phpstan-type GetPayoutRunsResponse array{object: 'list', data: list<PayoutRun>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPayoutsResponse array{object: 'list', data: list<Payout>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetTax1099ResponseDataItem array{partnerId: string, taxFormType: string, totalPaidUsdMinor: int, requiresForm: bool, fxMissingCurrencies: list<string>}
 * @phpstan-type GetTax1099Response array{object: 'list', data: list<GetTax1099ResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetFxRatesResponse array{object: 'list', data: list<FxRate>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetOrgFxFeedResponse array{enabled: bool, source: 'ecb', lastRateDate: string|null}
 * @phpstan-type PutOrgFxFeedResponse array{enabled: bool, source: 'ecb', synced: int}
 * @phpstan-type PostFxRatesSyncResponse array{orgId: string, date: string|null, inserted: int}
 * @phpstan-type PostFxRatesClearOverrideResponse array{base: string, quote: string, cleared: int}
 * @phpstan-type GetPayoutConnectionsResponseDataItem array{provider: string, env: string, status: string, connectedAt: string}
 * @phpstan-type GetPayoutConnectionsResponse array{object: 'list', data: list<GetPayoutConnectionsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PutPayoutConnectionsProviderResponse array{provider: string, env: string, status: 'active'}
 * @phpstan-type DeletePayoutConnectionsProviderResponse array{provider: string, removed: bool}
 * @phpstan-type PostFraudInvalidTrafficScanResponsePartnersItem array{partnerId: string, clicks: int, probability: float|int, label: 'clean'|'suspicious'|'invalid', contributions: array<string, float|int>}
 * @phpstan-type PostFraudInvalidTrafficScanResponse array{window: string, partners: list<PostFraudInvalidTrafficScanResponsePartnersItem>, flagged: int}
 * @phpstan-type GetFraudCasesResponse array{object: 'list', data: list<FraudCase>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnersIdQualityResponseLiveMetrics array{customers: float|int, repeatPayerRate: float|int, refundRate: float|int, disputeRate: float|int, trialToPaidRate: float|int, identityRiskRate?: float|int, valuePatternPenalty?: float|int}
 * @phpstan-type GetPartnersIdQualityResponseLive array{score: float|int, metrics: GetPartnersIdQualityResponseLiveMetrics}
 * @phpstan-type GetPartnersIdQualityResponseLastSnapshotOption1 array{score: float|int, metrics: GetOpenapiJsonResponse, computedAt: string}
 * @phpstan-type GetPartnersIdQualityResponse array{partnerId: string, live: GetPartnersIdQualityResponseLive, lastSnapshot: GetPartnersIdQualityResponseLastSnapshotOption1|null}
 * @phpstan-type PostQualityRecomputeResponse array{partners: int, casesOpened: int, suspended: int}
 * @phpstan-type PostFraudDetectRingsResponse array{ringsFound: int}
 * @phpstan-type GetReportsFilteredClicksResponseDataItem array{day: string, filtered: int, total: int, avgScore: float|int}
 * @phpstan-type GetReportsFilteredClicksResponse array{object: 'list', data: list<GetReportsFilteredClicksResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetAnalyticsOverviewResponseFunnel array{clickToSignup: float|int, signupToPaid: float|int}
 * @phpstan-type GetAnalyticsOverviewResponse array{clicks: int, filteredClicks: int, visitors: int, signups: int, payments: int, revenueMinor: int, commissionEarnedMinor: int, commissionReversedMinor: int, activePartners: int, funnel: GetAnalyticsOverviewResponseFunnel}
 * @phpstan-type GetAnalyticsTimeseriesResponseDataItem array{day: string, value: float|int}
 * @phpstan-type GetAnalyticsTimeseriesResponse array{object: 'list', data: list<GetAnalyticsTimeseriesResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetAnalyticsCohortLtvResponseDataItem array{cohort: string, customers: int, revenueMinor: int, ltvMinor: int}
 * @phpstan-type GetAnalyticsCohortLtvResponse array{object: 'list', data: list<GetAnalyticsCohortLtvResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetAnalyticsByGeoResponseDataItem array{geo: string, referrals: int, revenueMinor: int}
 * @phpstan-type GetAnalyticsByGeoResponse array{object: 'list', data: list<GetAnalyticsByGeoResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetAnalyticsByChannelResponseDataItem array{channel: string, referrals: int, revenueMinor: int}
 * @phpstan-type GetAnalyticsByChannelResponse array{object: 'list', data: list<GetAnalyticsByChannelResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetAnalyticsCouponPerformanceResponseDataItem array{code: string, partnerId: string, referrals: int, revenueMinor: int}
 * @phpstan-type GetAnalyticsCouponPerformanceResponse array{object: 'list', data: list<GetAnalyticsCouponPerformanceResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetReportsPartnerPerformanceResponseValueItem array{partnerId: string, displayName: string, email: string, status: string, clicks: int, referrals: int, payments: int, revenueMinor: int, earnedMinor: int, reversedMinor: int}
 * @phpstan-type GetReportsPartnerPerformanceResponse list<GetReportsPartnerPerformanceResponseValueItem>
 * @phpstan-type GetProfitabilitySettingsResponse array{reportingCurrency: string, defaultMarginBps: int|null, creditCostModel: 'face'|'margin'|'fixed_ratio', creditCostRatioBps?: int, inference: 'fifo_next_payments'|'report_only'|'on_grant', creditDraw: 'grants_first'|'pro_rata', windowDays: int, churnWindowDays: int, countReferrerSpend: bool, costToServeMinorPerMonth?: int, taxFeesReduceProfit: bool, valuePatternWeight: float|int, targetRoiBps?: int|null}
 * @phpstan-type GetProfitabilityProductsResponse array{data: list<GetProfitabilityProductsProductRefResponse>}
 * @phpstan-type GetProfitabilityProductsProductRefResponse array{productRef: string, marginBps: int|null, unitCostMinor: int|null, currency: string, updatedAt: string}
 * @phpstan-type PostProfitabilityRebuildResponse array{jobId: string}
 * @phpstan-type GetProfitabilityRebuildJobIdResponse array{status: 'queued'|'running'|'done'|'failed', processed: int, total: int, error?: string}
 * @phpstan-type GetRoiBreakdownResponseDataItemCoverage array{creditAppliedReportedBps: int|null, marginCoveredBps: int|null, inferredShareBps: int|null}
 * @phpstan-type GetRoiBreakdownResponseDataItemReferrals array{count: int, costMinor: int, cashCommissionMinor: int, netMinor: int|null, roi: float|int|null}
 * @phpstan-type GetRoiBreakdownResponseDataItem array{currency: string, creditCostMinor: int, cashAfterMinor: int, profitAfterMinor: int|null, netMinor: int|null, roi: float|int|null, paidBackShareBps: int|null, medianPaybackDays: float|int|null, grants: int, profitSources: array<string, int>, coverage: GetRoiBreakdownResponseDataItemCoverage, outstandingCreditMinor: int, outstandingCostIfUsedMinor: int|null, key: string, label: string, referrals?: GetRoiBreakdownResponseDataItemReferrals}
 * @phpstan-type GetRoiBreakdownResponse array{object: 'list', data: list<GetRoiBreakdownResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetRoiGrantsResponse array{object: 'list', data: list<RoiGrant>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetRoiPatternsResponsePatterns array{credit_only: list<RoiPatternEntry>, churn_at_exhaustion: list<RoiPatternEntry>, bonus_collector: list<RoiPatternEntry>, negative_partner: list<RoiPatternEntry>}
 * @phpstan-type GetRoiPatternsResponse array{patterns: GetRoiPatternsResponsePatterns}
 * @phpstan-type GetRoiPatternsPatternResponse array{object: 'list', data: list<RoiPatternEntry>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetRoiDataQualityResponseGapsItemFix array{text: string, href: string}
 * @phpstan-type GetRoiDataQualityResponseGapsItem array{code: 'margin_missing'|'credit_applied_unreported'|'partners_unlinked'|'fx_rate_missing', count: int, fix: GetRoiDataQualityResponseGapsItemFix}
 * @phpstan-type GetRoiDataQualityResponse array{paymentsTotal: int, paymentsWithCreditInfo: int, productsWithMargin: int, productsSeen: int, partnersLinked: int, partnersTotal: int, excludedForFx: int, gaps: list<GetRoiDataQualityResponseGapsItem>}
 * @phpstan-type PostValueEventsResponseResultsItem array{index: int, id: string, created: bool, superseded: list<string>}
 * @phpstan-type PostValueEventsResponseErrorsItem array{index: int, message: string}
 * @phpstan-type PostValueEventsResponse array{results: list<PostValueEventsResponseResultsItem>, errors: list<PostValueEventsResponseErrorsItem>}
 * @phpstan-type PostValueImportResponseValueOption1ErrorsItem array{row: int, error: string}
 * @phpstan-type PostValueImportResponseValueOption1 array{rows: list<array<string, mixed>>, errors: list<PostValueImportResponseValueOption1ErrorsItem>, total: int}
 * @phpstan-type PostValueImportResponseValueOption2ErrorsItem array{row: int, error: string}
 * @phpstan-type PostValueImportResponseValueOption2 array{recorded: int, duplicates: int, errors: list<PostValueImportResponseValueOption2ErrorsItem>}
 * @phpstan-type PostValueImportResponseValueOption3 array{jobId: string}
 * @phpstan-type PostValueImportResponse PostValueImportResponseValueOption1|PostValueImportResponseValueOption2|PostValueImportResponseValueOption3
 * @phpstan-type GetValueImportJobIdResponseErrorsItem array{row: int, error: string}
 * @phpstan-type GetValueImportJobIdResponse array{status: 'queued'|'running'|'done'|'failed', processed: int, total: int, recorded: int, duplicates: int, errors: list<GetValueImportJobIdResponseErrorsItem>, error?: string}
 * @phpstan-type GetPartnerKycStatusResponse array{kycStatus: string, sanctionsStatus: string, verifiedAt: string|null}
 * @phpstan-type PostPartnerKycSubmitResponse array{kycStatus: 'verified'|'pending'|'rejected', sanctionsStatus: 'clear'|'flagged'}
 * @phpstan-type GetPartnerMeResponseAccount array{id: string, email: string, name: string|null}
 * @phpstan-type GetPartnerMeResponseMembershipsItemProgramsItem array{programId: string, name: string, slug: string, enrollmentId: string, enrollmentStatus: string}
 * @phpstan-type GetPartnerMeResponseMembershipsItem array{orgId: string, orgName: string, partnerId: string, programs: list<GetPartnerMeResponseMembershipsItemProgramsItem>}
 * @phpstan-type GetPartnerMeResponse array{account?: GetPartnerMeResponseAccount, memberships: list<GetPartnerMeResponseMembershipsItem>}
 * @phpstan-type GetPartnerStatsResponseDataItem array{orgId: string, partnerId: string, clicks: int, referrals: int, payments: int, balances: list<Balance>}
 * @phpstan-type GetPartnerStatsResponse array{object: 'list', data: list<GetPartnerStatsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerLinksResponseDataItem array{id: string, orgId: string, programId: string, code: string, destinationUrl: string, shortPath: string, shortUrl: string, directParam: string, clicks: int}
 * @phpstan-type GetPartnerLinksResponse array{object: 'list', data: list<GetPartnerLinksResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerAssetsResponseDataItem array{id: string, orgId: string, orgName: string, programId: string, programName: string, kind: string, title: string, content: string, dimensions: string, createdAt: string}
 * @phpstan-type GetPartnerAssetsResponse array{object: 'list', data: list<GetPartnerAssetsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerDisputesResponseDataItem array{id: string, orgId: string, orgName: string, referralId: string|null, kind: string, status: string, detail: string, resolution: string|null, createdAt: string, resolvedAt: string|null}
 * @phpstan-type GetPartnerDisputesResponse array{object: 'list', data: list<GetPartnerDisputesResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerReferralsResponseDataItem array{id: string, orgId: string, programId: string, customer: string, status: string, matchedVia: string, ts: string}
 * @phpstan-type GetPartnerReferralsResponse array{object: 'list', data: list<GetPartnerReferralsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerReferralsIdTransparencyResponse array{referralId: string, status: string, matchedVia: string, confidence: float|int, model: string|null, windowDays: int|null, consideredTouchpoints: int, yourCreditWeight: float|int, notes: list<string>, noteCodes: list<ReasonNote>}
 * @phpstan-type GetPartnerPayoutsResponseDataItem array{id: string, orgId: string, amountMinor: int, currency: string, status: string, rail: string, sentAt: string|null, createdAt: string}
 * @phpstan-type GetPartnerPayoutsResponse array{object: 'list', data: list<GetPartnerPayoutsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PutPartnerOrgsOrgIdPayoutProfileResponse array{id: string}
 * @phpstan-type GetPartnerProgramsProgramIdLeaderboardResponseContestOption1 array{startsAt: string, endsAt: string, prize: string|null}
 * @phpstan-type GetPartnerProgramsProgramIdLeaderboardResponseRowsItem array{rank: int, name: string, approvedMinor: int, you: bool}
 * @phpstan-type GetPartnerProgramsProgramIdLeaderboardResponse array{contest: GetPartnerProgramsProgramIdLeaderboardResponseContestOption1|null, rows: list<GetPartnerProgramsProgramIdLeaderboardResponseRowsItem>}
 * @phpstan-type PostPartnerProgramsProgramIdApplyResponse array{enrollmentId: string, status: 'applied'}
 * @phpstan-type PostWebhookEndpointsResponse array{id: string, url: string, topics: list<string>, programIds: list<string>|null, legacySignature: bool, secret: string}
 * @phpstan-type GetWebhookEndpointsResponse array{object: 'list', data: list<WebhookEndpoint>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostWebhookEndpointsIdRotateSecretResponse array{id: string, secret: string, previousSecretExpiresAt: string}
 * @phpstan-type GetWebhookDeliveriesResponse array{object: 'list', data: list<WebhookDelivery>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetWebhookEndpointsIdDeliveriesResponse array{object: 'list', data: list<WebhookDelivery>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetWebhookDeliveriesIdResponse mixed
 * @phpstan-type PostSandboxSimulateResponse array{customerRef: string, events: int, conversions: int, linesCreated: int, reversals: int}
 * @phpstan-type PostImportProviderResponse array{partnersCreated: int, partnersSkipped: int, linksCreated: int, couponsCreated: int, codesSkipped: list<string>, referralParams: list<string>, unpaidImportedMinor: int, paidImportedMinor: int}
 * @phpstan-type GetOpenapiJsonResponse array<string, mixed>
 * @phpstan-type GetBrandingResponse array{logoUrl: string|null, theme: GetOpenapiJsonResponse|null, portalDomain: string|null, portalDomainVerified: bool, portalDomainStatus: 'none'|'pending'|'provisioning'|'active', linkDomain: string|null, linkDomainVerified: bool, linkDomainStatus: 'none'|'pending'|'provisioning'|'active', emailFrom: string|null}
 * @phpstan-type PostBrandingLinkDomainResponse array{domain: string, cnameTarget: string, txtRecord: string, txtName: string, verified: bool}
 * @phpstan-type PostBrandingLinkDomainVerifyResponse array{domain: string, verified: bool, status: 'provisioning'|'active', message?: string}
 * @phpstan-type PostBrandingDomainResponse array{domain: string, cnameTarget: string, txtRecord: string, txtName: string, verified: bool, instructions: string}
 * @phpstan-type PostEmbedTokensResponse array{token: string, expiresAt: string}
 * @phpstan-type GetEmbedSummaryResponsePartner array{name: string, email: string}
 * @phpstan-type GetEmbedSummaryResponseBalancesItem array{currency: string, pending: int, approved: int, paid: int}
 * @phpstan-type GetEmbedSummaryResponseLinksItem array{code: string, destinationUrl: string}
 * @phpstan-type GetEmbedSummaryResponse array{partner: GetEmbedSummaryResponsePartner, clicks: int, referrals: int, balances: list<GetEmbedSummaryResponseBalancesItem>, links: list<GetEmbedSummaryResponseLinksItem>}
 * @phpstan-type PostDiscoverySearchResponse array{found: int, added: int}
 * @phpstan-type PostDiscoveryCorpusResponse array{received: int, added: int}
 * @phpstan-type GetProspectsResponseDataItem array{id: string, name: string, url: string, channel: string, audienceSize: int, evidence: GetOpenapiJsonResponse|null, fitScore: float|int, contactEmail: string|null, status: string}
 * @phpstan-type GetProspectsResponse array{object: 'list', data: list<GetProspectsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostOutreachDraftResponse array{messageIds: list<string>}
 * @phpstan-type GetOutreachResponseDataItem array{id: string, prospectId: string, step: int, subject: string, status: string, createdAt: string, sentAt: string|null}
 * @phpstan-type GetOutreachResponse array{object: 'list', data: list<GetOutreachResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostOutreachSendDueResponse array{sent: int, suppressed: int, capped: bool, failed: int}
 * @phpstan-type PostUnsubscribeTokenResponse array{ok: bool}
 * @phpstan-type GetAssistantSuggestionsResponseDataItem array{kind: string, message: string, suggestedAction: string, data: array<string, string|float|int>}
 * @phpstan-type GetAssistantSuggestionsResponse array{object: 'list', data: list<GetAssistantSuggestionsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetMarketplaceListingResponseDataItemStats array{clicks: int, referrals: int, epcMinor: int, conversionRate: float|int, payoutReliability: float|int|null, approvalLatencyHours: float|int|null}
 * @phpstan-type GetMarketplaceListingResponseDataItem array{programId: string, visibility: string, category: string, headline: string, stats: GetMarketplaceListingResponseDataItemStats}
 * @phpstan-type GetMarketplaceListingResponse array{object: 'list', data: list<GetMarketplaceListingResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerMarketplaceResponseDataItemStats array{clicks: int, referrals: int, epcMinor: int, conversionRate: float|int, payoutReliability: float|int|null, approvalLatencyHours: float|int|null}
 * @phpstan-type GetPartnerMarketplaceResponseDataItem array{programId: string, programName: string, merchant: string, category: string, headline: string, sponsored: bool, cookieWindowDays: int, commissionSummary: GetOpenapiJsonResponse|null, stats: GetPartnerMarketplaceResponseDataItemStats}
 * @phpstan-type GetPartnerMarketplaceResponse array{object: 'list', data: list<GetPartnerMarketplaceResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerProfileVerifiedResponse array{programs: int, clicks: int, referrals: int, repeatPayerRate: float|int|null, verified: bool}
 * @phpstan-type PostPartnerDisputesResponse array{id: string, status: 'open'}
 * @phpstan-type GetDisputesResponseDataItem array{id: string, partnerId: string, partnerEmail: string, referralId: string|null, kind: string, status: string, detail: string, resolution: string|null, createdAt: string}
 * @phpstan-type GetDisputesResponse array{object: 'list', data: list<GetDisputesResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetCreatorsResponse array{object: 'list', data: list<CreatorProfile>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostCreatorsAccountIdInviteResponse array{id: string, program: string}
 * @phpstan-type GetInvitationsResponseDataItem array{id: string, creatorName: string|null, accountId: string, programId: string, programName: string, status: string, message: string, createdAt: string, respondedAt: string|null}
 * @phpstan-type GetInvitationsResponse array{object: 'list', data: list<GetInvitationsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerInvitationsResponseDataItem array{id: string, merchant: string, orgId: string, programId: string, programName: string, status: string, message: string, createdAt: string}
 * @phpstan-type GetPartnerInvitationsResponse array{object: 'list', data: list<GetPartnerInvitationsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetBillingPlanResponseUsage array{programs: int, partners: int}
 * @phpstan-type GetBillingPlanResponse array{plan: string, planStatus: string, periodEnd: string|null, limits: GetOpenapiJsonResponse, usage: GetBillingPlanResponseUsage, catalog: array<string, GetOpenapiJsonResponse>, subscribed: bool, canActivate: bool}
 * @phpstan-type PostBillingCheckoutResponse array{url?: string, sessionId?: string}
 * @phpstan-type PostBillingPortalResponse array{url: string}
 * @phpstan-type PostBillingActivateResponse array{plan: string, planStatus: string}
 * @phpstan-type GetProgramsIdRefereeRewardResponse array{refereeReward: GetOpenapiJsonResponse|null}
 * @phpstan-type PutProgramsIdRefereeRewardResponse array{ok: bool, refereeReward: GetOpenapiJsonResponse|null}
 * @phpstan-type GetRewardsResponseDataItem array{id: string, programId: string, referralId: string, customerRef: string, kind: string, amountMinor: int, currency: string, code: string|null, status: 'issued'|'redeemed'|'void', createdAt: string, redeemedAt: string|null}
 * @phpstan-type GetRewardsResponse array{object: 'list', data: list<GetRewardsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetRewardsLookupCodeResponse array{valid: bool, rewardId?: string, kind?: string, amountMinor?: int, currency?: string, status?: string}
 * @phpstan-type PostRewardsRedeemByCodeResponse array{ok: bool, rewardId: string, grantId: string, status: 'issued'|'redeemed', currency: string, requestedMinor: int, redeemedMinor: int, remainingMinor: int, capped: bool}
 * @phpstan-type GetProgramsIdGroupsResponse array{object: 'list', data: list<PartnerGroup>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PutProgramsIdPartnersPartnerIdGroupResponse array{partnerId: string, programId: string, groupId: string|null}
 * @phpstan-type GetProgramsIdPromotionsResponse array{object: 'list', data: list<Promotion>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerGroupsResponseDataItem array{groupId: string, groupName: string, orgName: string, programId: string, programName: string, onboardingMessage: string|null, onboardingChecklist: list<string>, holdDays: int|null, minThresholdMinor: int|null, payoutCurrency: string|null}
 * @phpstan-type GetPartnerGroupsResponse array{object: 'list', data: list<GetPartnerGroupsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostContractsResponse array{id: string, status: 'draft'|'sent'}
 * @phpstan-type GetContractsResponseDataItem array{id: string, programId: string, partnerId: string, title: string, compensation: GetOpenapiJsonResponse, status: string, createdAt: string, respondedAt: string|null}
 * @phpstan-type GetContractsResponse array{object: 'list', data: list<GetContractsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerContractsResponseDataItem array{id: string, merchant: string, program: string, title: string, termsMd: string, compensation: GetOpenapiJsonResponse, status: string, createdAt: string}
 * @phpstan-type GetPartnerContractsResponse array{object: 'list', data: list<GetPartnerContractsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PutProgramsIdIncrementalityResponse array{ok: bool, holdoutBps: int}
 * @phpstan-type GetIncrementalityResponseTreatment array{referrals: int, converted: int, rate: float|int}
 * @phpstan-type GetIncrementalityResponseControl array{referrals: int, converted: int, rate: float|int}
 * @phpstan-type GetIncrementalityResponseByPartnerItem array{partnerId: string, treatmentReferrals: int, controlReferrals: int, lift: float|int}
 * @phpstan-type GetIncrementalityResponse array{programId: string, holdoutBps: int, treatment: GetIncrementalityResponseTreatment, control: GetIncrementalityResponseControl, lift: float|int, byPartner: list<GetIncrementalityResponseByPartnerItem>}
 * @phpstan-type PutProgramsIdAutopricingResponse array{ok: bool, autopricing: GetOpenapiJsonResponse|null}
 * @phpstan-type GetProgramsIdAutopricingResponseAutopricingOption1 array{enabled: bool, targetRoas: float|int, minBps: int, maxBps: int, objective: 'roas'|'roi', targetRoi: float|int}
 * @phpstan-type GetProgramsIdAutopricingResponse array{autopricing: GetProgramsIdAutopricingResponseAutopricingOption1|null}
 * @phpstan-type PostProgramsIdAutopriceRunResponseChangesItem array{partnerId: string, fromBps: int, toBps: int, realizedRoas: float|int|null, realizedRoi?: float|int|null}
 * @phpstan-type PostProgramsIdAutopriceRunResponseHeldItem array{partnerId: string, reason: 'roi_unknown'|'too_few_matured', maturedGrants: int}
 * @phpstan-type PostProgramsIdAutopriceRunResponse array{objective: 'roas'|'roi', targetRoas: float|int, targetRoi?: float|int, changes: list<PostProgramsIdAutopriceRunResponseChangesItem>, held?: list<PostProgramsIdAutopriceRunResponseHeldItem>}
 * @phpstan-type GetPassportPublicKeyResponse array{algorithm: 'ed25519', publicKey: string}
 * @phpstan-type PostPassportVerifyResponse array{valid: bool, claims?: GetOpenapiJsonResponse, reason?: string}
 * @phpstan-type GetPartnerAdvanceOfferResponse array{currency: string, monthlyRunRateMinor: int, projectedMinor: int, maxAdvanceMinor: int, feeBps: int, qualityScore: float|int}
 * @phpstan-type PostPartnerAdvanceAcceptResponse array{id: string, principalMinor: int, feeMinor: int, outstandingMinor: int, status: string}
 * @phpstan-type GetPartnerAdvanceResponseDataItem array{id: string, currency: string, principalMinor: int, feeMinor: int, outstandingMinor: int, status: string, createdAt: string, repaidAt: string|null}
 * @phpstan-type GetPartnerAdvanceResponse array{object: 'list', data: list<GetPartnerAdvanceResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PutNetworkSettingsResponse array{enabled: bool}
 * @phpstan-type GetNetworkSettingsResponse array{enabled: bool}
 * @phpstan-type GetNetworkJourneyResponseTouchpointsItem array{partnerAccountId: string, ts: string, credit: float|int}
 * @phpstan-type GetNetworkJourneyResponse array{emailHash: string, model: string, touchpoints: list<GetNetworkJourneyResponseTouchpointsItem>, partners: int}
 * @phpstan-type PutProgramsIdNegotiationPolicyResponse array{ok: bool, negotiationPolicy: GetOpenapiJsonResponse|null}
 * @phpstan-type GetProgramsIdNegotiationPolicyResponse array{negotiationPolicy: GetOpenapiJsonResponse|null}
 * @phpstan-type GetNegotiationsResponseDataItem array{id: string, programId: string, agentAccountId: string, proposedBps: int, decision: string, rateBps: int|null, round: int, createdAt: string}
 * @phpstan-type GetNegotiationsResponse array{object: 'list', data: list<GetNegotiationsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetCleanroomConsentResponseConsentOption1 array{granted: bool, purposes: list<string>, declared: GetOpenapiJsonResponse, emailHash: string|null, updatedAt: string}
 * @phpstan-type GetCleanroomConsentResponse array{customerRef: string, consent: GetCleanroomConsentResponseConsentOption1|null}
 * @phpstan-type GetCleanroomQueryResponseCohortsItem array{key: string, count: int}
 * @phpstan-type GetCleanroomQueryResponse array{dimension: string, k: int, cohorts: list<GetCleanroomQueryResponseCohortsItem>, suppressedCohorts: int, suppressedRows: int}
 * @phpstan-type GetAgentsResponseDataItem array{partnerId: string, accountId: string, name: string, wallet: string|null, metadata: GetOpenapiJsonResponse|null, instantPayout: bool, status: string, recommendations: int}
 * @phpstan-type GetAgentsResponse array{object: 'list', data: list<GetAgentsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetAgentsRecommendationsResponseDataItem array{id: string, programId: string, customerRef: string, agent: string, wallet: string|null, createdAt: string}
 * @phpstan-type GetAgentsRecommendationsResponse array{object: 'list', data: list<GetAgentsRecommendationsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetAdminMetricsResponse array{orgs: int, suspendedOrgs: int, partnerAccounts: int, bannedPartners: int, programs: int, commissionEarnedMinor: int, payoutsSent: int, openFraudCases: int}
 * @phpstan-type GetAdminOrgsResponseDataItem array{id: string, name: string, plan: string, planStatus: string|null, suspended: bool, createdAt: string, programs: int, partners: int}
 * @phpstan-type GetAdminOrgsResponse array{object: 'list', data: list<GetAdminOrgsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostAdminOrgsIdSuspendResponse array{ok: bool, suspended: bool}
 * @phpstan-type PostAdminOrgsIdPlanResponse array{plan: string, planStatus: string}
 * @phpstan-type PostAdminOrgsIdUnsuspendResponse array{ok: bool, suspended: bool}
 * @phpstan-type GetAdminPartnerAccountsResponseDataItem array{id: string, email: string, name: string|null, banned: bool, kycStatus: string|null, sanctionsStatus: string|null, createdAt: string}
 * @phpstan-type GetAdminPartnerAccountsResponse array{object: 'list', data: list<GetAdminPartnerAccountsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostAdminPartnerAccountsIdBanResponse array{ok: bool, banned: bool}
 * @phpstan-type PostAdminPartnerAccountsIdUnbanResponse array{ok: bool, banned: bool}
 * @phpstan-type GetNotificationsResponse array{object: 'list', data: list<Notification>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerNotificationsResponse array{object: 'list', data: list<Notification>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostAssetsResponse array{id: string, programId: string, kind: string, title: string, content: string, dimensions: string, groupId?: string|null}
 * @phpstan-type GetAssetsResponseDataItem array{id: string, programId: string, kind: string, title: string, content: string, dimensions: string, groupId: string|null, clicks: int, referrals: int, createdAt: string}
 * @phpstan-type GetAssetsResponse array{object: 'list', data: list<GetAssetsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostPartnerDealsResponse array{id: string, status: 'submitted'}
 * @phpstan-type GetPartnerDealsResponseDataItem array{id: string, orgId: string, company: string, valueMinor: int, currency: string, status: string, protectionExpiresAt: string|null, createdAt: string}
 * @phpstan-type GetPartnerDealsResponse array{object: 'list', data: list<GetPartnerDealsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetDealsResponseDataItem array{id: string, programId: string, partnerId: string, partnerEmail: string, company: string, contactEmail: string, valueMinor: int, currency: string, status: string, protectionExpiresAt: string|null, referralId: string|null, notes: string, createdAt: string}
 * @phpstan-type GetDealsResponse array{object: 'list', data: list<GetDealsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostDealsIdApproveResponse array{id: string, status: 'approved', protectionExpiresAt: string}
 * @phpstan-type PostDealsIdRejectResponse array{id: string, status: 'rejected'}
 * @phpstan-type PostDealsIdWonResponse array{id: string, status: 'won', referralId: string}
 * @phpstan-type PostProgramsIdApplyLevelingResponse array{evaluated: int, promoted: int}
 * @phpstan-type PostPayoutRunsRunScheduledResponseValueItem array{orgId: string, runId: string, payouts: int, sent: int, failed: int}
 * @phpstan-type PostPayoutRunsRunScheduledResponse list<PostPayoutRunsRunScheduledResponseValueItem>
 * @phpstan-type PutPartnerOrgsOrgIdPostbackResponse array{url: string, secret: string, macros: list<string>}
 * @phpstan-type GetPartnerPostbackLogsResponseDataItem array{topic: string, url: string, statusCode: int|null, ts: string}
 * @phpstan-type GetPartnerPostbackLogsResponse array{object: 'list', data: list<GetPartnerPostbackLogsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerRecruitResponse array{code: string, url: string}
 * @phpstan-type GetPartnerAchievementsResponseDataItem array{id: string, title: string, unlocked: bool, progress: int, target: int}
 * @phpstan-type GetPartnerAchievementsResponse array{object: 'list', data: list<GetPartnerAchievementsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPartnerTermsResponseDataItem array{versionId: string, programId: string, programName: string, version: int, termsMd: string, accepted: bool}
 * @phpstan-type GetPartnerTermsResponse array{object: 'list', data: list<GetPartnerTermsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetProgramsIdTermsAcceptancesResponseDataItem array{version: int, partnerEmail: string, acceptedAt: string}
 * @phpstan-type GetProgramsIdTermsAcceptancesResponse array{object: 'list', data: list<GetProgramsIdTermsAcceptancesResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetSetupStatusResponse array{checks: array<string, bool>, hints: list<string>, hintKeys: list<string>, progress: string}
 * @phpstan-type PostAnomaliesScanResponseValueItem array{orgId: string, metric: 'clicks'|'referrals'|'refunds', kind: 'spike'|'drop', last24h: float|int, daily7dAvg: float|int}
 * @phpstan-type PostAnomaliesScanResponse list<PostAnomaliesScanResponseValueItem>
 * @phpstan-type PostPrivacyForgetResponsePartnersItem array{partnerId: string, alreadyForgotten: bool}
 * @phpstan-type PostPrivacyForgetResponseCustomersItem array{customerRef: string, pseudonym: string}
 * @phpstan-type PostPrivacyForgetResponse array{ok: bool, pseudonym?: string, partners?: list<PostPrivacyForgetResponsePartnersItem>, customers?: list<PostPrivacyForgetResponseCustomersItem>}
 * @phpstan-type PostPrivacyLookupResponse array{found: bool, customerRefs: list<string>, partnerId: string|null}
 * @phpstan-type PostPrivacyRequestsResponse array{id: string, status: 'completed'|'failed'}
 * @phpstan-type GetPrivacyRequestsResponse array{object: 'list', data: list<PrivacyRequest>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPrivacyRequestsIdResultResponseCustomersItemOption2 array{customerRef: string, pseudonym: string}
 * @phpstan-type GetPrivacyRequestsIdResultResponsePartnersItem array{partnerId: string, alreadyForgotten: bool}
 * @phpstan-type GetPrivacyRequestsIdResultResponse array{found: bool, customers: list<CustomerExport|GetPrivacyRequestsIdResultResponseCustomersItemOption2>, partner?: PartnerExport|null, partners?: list<GetPrivacyRequestsIdResultResponsePartnersItem>}
 * @phpstan-type PostEmailSettingsVerifyDomainResponse mixed
 * @phpstan-type GetEmailTemplatesResponse array{object: 'list', data: list<EmailTemplateEvent>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PutEmailTemplatesEventLocaleResponse array{event: string, locale: string, subject: string, text: string, html: string|null, updatedAt: string}
 * @phpstan-type DeleteEmailTemplatesEventLocaleResponse array{ok: bool, reset: bool}
 * @phpstan-type PostEmailTestResponse array{sent: bool, id: string, provider: string}
 * @phpstan-type PutMeLocaleResponse array{locale: string}
 * @phpstan-type PutMeRoiDigestResponse array{enabled: bool}
 * @phpstan-type PutPartnerLocaleResponse array{locale: string}
 * @phpstan-type GetIntegrationsResponseZapier array{hooks: int, events: list<string>}
 * @phpstan-type GetIntegrationsResponse array{zapier: GetIntegrationsResponseZapier, hubspot: IntegrationConnection|null, segment: IntegrationConnection|null}
 * @phpstan-type PostIntegrationsHubspotTestResponse array{ok: bool, portalId: int|null, createdProperties: list<string>, error: string|null}
 * @phpstan-type PostIntegrationsSegmentTestResponse array{ok: bool, error: string|null}
 * @phpstan-type GetIntegrationsDeliveriesResponse array{object: 'list', data: list<IntegrationDelivery>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetZapierEventsResponseValueItem array{key: string}
 * @phpstan-type GetZapierEventsResponse list<GetZapierEventsResponseValueItem>
 * @phpstan-type GetZapierHooksResponse array{object: 'list', data: list<ZapierHook>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetZapierTriggersEventResponseValueItem array{id: string, event: string, createdAt: string}
 * @phpstan-type GetZapierTriggersEventResponse list<GetZapierTriggersEventResponseValueItem>
 * @phpstan-type PostZapierConversionsResponse array{connectionId: string}
 * @phpstan-type PostPartnerSecurityTotpSetupResponse array{secret: string, otpauthUrl: string}
 * @phpstan-type PostPartnerSecurityTotpEnableResponse array{enabled: bool}
 * @phpstan-type PostPartnerSecurityTotpDisableResponse array{enabled: bool}
 * @phpstan-type GetPartnerSecurityResponse array{totpEnabled: bool}
 * @phpstan-type GetAuthConnectionsResponse array{object: 'list', data: list<AuthConnection>, has_more: bool, next_cursor: string|null}
 * @phpstan-type PostAuthConnectionsIdRotateSecretResponse array{id: string, provider: string, secret: string, previousSecretExpiresAt: string}
 * @phpstan-type PatchAuthConnectionsIdResponse array{id: string, provider: string, name: string, status: 'active'|'paused', autoEnrollUsers?: bool, destinationUrl?: string|null, signatureVersion?: 'v1+v2'|'v2', requiresV2?: bool}
 * @phpstan-type PostAuthConnectionsIdRevokePreviousSecretResponse array{ok: bool, revoked: bool}
 * @phpstan-type PostAuthConnectionsIdSignupsResponseReferralOption1 array{id: string, partnerId: string, partnerExternalRef: string|null, matchedVia: string, status: string, persisted?: bool}
 * @phpstan-type PostAuthConnectionsIdSignupsResponseReasoning array{notes: list<string>, codes: list<SignupReasonCode>}
 * @phpstan-type PostAuthConnectionsIdSignupsResponsePartner array{id: string, code: string, link: string|null, persisted?: bool}
 * @phpstan-type PostAuthConnectionsIdSignupsResponse array{test?: bool, referral: PostAuthConnectionsIdSignupsResponseReferralOption1|null, reasoning?: PostAuthConnectionsIdSignupsResponseReasoning, partner?: PostAuthConnectionsIdSignupsResponsePartner}
 * @phpstan-type PostAuthConnectionsIdEraseResponseCustomerOption1 array{customerRef: string, pseudonym: string}
 * @phpstan-type PostAuthConnectionsIdEraseResponsePartnerOption1 array{partnerId: string, alreadyForgotten: bool}
 * @phpstan-type PostAuthConnectionsIdEraseResponse array{ok: bool, erased: bool, customer: PostAuthConnectionsIdEraseResponseCustomerOption1|null, partner: PostAuthConnectionsIdEraseResponsePartnerOption1|null}
 * @phpstan-type GetAuthConnectionsIdExportResponse array{customer: CustomerExport, partner: PartnerExport|null}
 * @phpstan-type PostAuthConnectionsIdPingResponse array{ok: bool, connectionId: string, programId: string, orgName: string, autoEnrollUsers: bool, serverTime: string}
 * @phpstan-type PostAuthConnectionsIdAliasesResponse array{ok: bool, customerRef: string, referralIds: list<string>, partnerId: string|null, alreadyAliased: bool, reprocessedPayments: int}
 * @phpstan-type PostAuthConnectionsIdUsersResponseCustomerOption1 array{customerRef: string, pseudonym: string}
 * @phpstan-type PostAuthConnectionsIdUsersResponsePartnerOption1Option1 array{partnerId: string, alreadyForgotten: bool}
 * @phpstan-type PostAuthConnectionsIdUsersResponsePartnerOption1Option2 array{id: string, status: string}
 * @phpstan-type PostAuthConnectionsIdUsersResponse array{ok: bool, deleted?: bool, erased?: bool, customer?: PostAuthConnectionsIdUsersResponseCustomerOption1|null, partner: PostAuthConnectionsIdUsersResponsePartnerOption1Option1|PostAuthConnectionsIdUsersResponsePartnerOption1Option2|null, updated?: list<string>, notes?: list<string>}
 * @phpstan-type PostAuthConnectionsIdSignalsResponseReferralsItem array{id: string, status: string}
 * @phpstan-type PostAuthConnectionsIdSignalsResponseReversedItem array{lineId: string, amountMinor: int, currency: string}
 * @phpstan-type PostAuthConnectionsIdSignalsResponsePartnerOption1 array{id: string, status: string}
 * @phpstan-type PostAuthConnectionsIdSignalsResponse array{ok: bool, signal: 'email_verified'|'banned'|'unbanned'|'fraud_confirmed'|'self_referral', referrals: list<PostAuthConnectionsIdSignalsResponseReferralsItem>, reversed: list<PostAuthConnectionsIdSignalsResponseReversedItem>, partner: PostAuthConnectionsIdSignalsResponsePartnerOption1|null, notes?: list<string>}
 * @phpstan-type GetOrgSsoResponseProviderOption1 array{name: string, label: string}
 * @phpstan-type GetOrgSsoResponseConnectionsItem array{id: string, type: string, status: string, allowedDomains: list<string>}
 * @phpstan-type GetOrgSsoResponseTicketsItem array{id: string, status: string, expiresAt: string, createdAt: string}
 * @phpstan-type GetOrgSsoResponse array{configured: bool, provider: GetOrgSsoResponseProviderOption1|null, defaultRoleMapping: array<string, string>, linked: bool, tenantId: string|null, atlasOrgId: string|null, connections: list<GetOrgSsoResponseConnectionsItem>, domains: list<string>, requireSso: bool, roleMapping: array<string, string>, tickets: list<GetOrgSsoResponseTicketsItem>, providerError: string|null, atlasError: string|null}
 * @phpstan-type PostOrgSsoLinkResponse array{linked: bool, provider: string, tenantId: string, atlasOrgId: string|null}
 * @phpstan-type PostOrgSsoTicketsResponse array{id: string, url: string, expiresAt: string}
 * @phpstan-type PostOrgSsoTicketsIdRevokeResponse array{id: string, status: 'revoked'}
 * @phpstan-type GetOrgSsoConnectionsIdSamlMetadataResponse array{spEntityId: string, acsUrl: string, metadataXml: string}
 * @phpstan-type PatchOrgSsoResponse array{requireSso: bool, roleMapping: array<string, string>}
 * @phpstan-type PostPartnerAuthWalletNonceResponse array{nonce: string, message: string}
 * @phpstan-type PostPartnerAuthWalletVerifyResponse array{accountId: string, wallet: string}
 * @phpstan-type PostOnchainConnectionsResponse array{id: string, secret: string, webhookUrl: string}
 * @phpstan-type GetOnchainConnectionsResponseDataItem array{id: string, programId: string, name: string, status: string, createdAt: string}
 * @phpstan-type GetOnchainConnectionsResponse array{object: 'list', data: list<GetOnchainConnectionsResponseDataItem>, has_more: bool, next_cursor: string|null}
 * @phpstan-type GetPublicProgramsHandleResponseBranding array{logoUrl: string|null, theme: GetOpenapiJsonResponse|null}
 * @phpstan-type GetPublicProgramsHandleResponse array{handle: string, programId: string, programName: string, merchant: string, trackingToken: string, cookieWindowDays: int, termsMd: string, pitch: string, autoApprove: bool, commission: GetOpenapiJsonResponse|null, branding: GetPublicProgramsHandleResponseBranding}
 * @phpstan-type PostPublicProgramsHandleJoinResponse array{accountId: string, status: 'approved'|'applied', link: string|null, linkUrl: string|null, code: string|null, portalUrl: string}
 * @phpstan-type PostWebhooksBillingConnectionIdResponseResultsItem array{duplicate: bool, billingEventId: string|null, conversions: int, linesCreated: int, reversals: int}
 * @phpstan-type PostWebhooksBillingConnectionIdResponse array{received: int, results: list<PostWebhooksBillingConnectionIdResponseResultsItem>}
 * @phpstan-type PostWebhooksAuthConnectionIdResponseResultsItem array{customerRef: string, attributed: bool, reason?: string, partnerId?: string|null, matchedVia?: string|null}
 * @phpstan-type PostWebhooksAuthConnectionIdResponse array{received: int, results: list<PostWebhooksAuthConnectionIdResponseResultsItem>}
 * @phpstan-type PostWebhooksSsoProviderResponse array{received: bool, duplicate: bool, handled?: bool, effects?: list<string>}
 * @phpstan-type PostWebhooksOnchainConnectionIdResponseResultsItem array{txHash: string, wallet: string, amountMinor: int, attributed: bool, linesCreated: int, duplicate: bool}
 * @phpstan-type PostWebhooksOnchainConnectionIdResponse array{received: int, results: list<PostWebhooksOnchainConnectionIdResponseResultsItem>}
 * @phpstan-type PostWebhooksPayoutsProviderResponse array{ignored?: bool, reason?: string, finalized?: bool, status?: string}
 * @phpstan-type PostWebhooksStripeBillingResponse array{received: bool, duplicate?: bool, ignored?: bool, reason?: string, orgId?: string, plan?: string, planStatus?: string}
 * @phpstan-type GetGraphqlResponse array{data?: GetOpenapiJsonResponse|null, errors?: list<GetOpenapiJsonResponse>}
 * @phpstan-type PostGraphqlResponse array{data?: GetOpenapiJsonResponse|null, errors?: list<GetOpenapiJsonResponse>}
 * @phpstan-type PostAgentsRegisterBody array{walletAddress: string, nonce: string, signature: string, name?: string, model?: string, operator?: string, instantPayout?: bool}
 * @phpstan-type PostOrgsBody array{name: string}
 * @phpstan-type PostMobilePurchasesBody array{eventId: string, customerRef: string, type?: 'purchase'|'refund', amountMinor: int, currency?: string, productRef?: string}
 * @phpstan-type PatchOrgBody array{name?: string, settings?: array<string, mixed>, payoutKycRequired?: bool}
 * @phpstan-type PostOrgMembersBody array{email: string, role: 'owner'|'admin'|'finance'|'analyst'|'support'}
 * @phpstan-type PatchOrgMembersUserIdBody array{role: 'owner'|'admin'|'finance'|'analyst'|'support'}
 * @phpstan-type PutOrgPayoutScheduleBodyScheduleOption1Option1 array{kind: 'monthly', dayOfMonth: int}
 * @phpstan-type PutOrgPayoutScheduleBodyScheduleOption1Option2 array{kind: 'weekly', dayOfWeek: int}
 * @phpstan-type PutOrgPayoutScheduleBodyScheduleOption1Option3 array{kind: 'twice_monthly', days: list<int>}
 * @phpstan-type PutOrgPayoutScheduleBodyScheduleOption1Option4 array{kind: 'custom', dates: list<string>}
 * @phpstan-type PutOrgPayoutScheduleBody array{dayOfMonth?: int|null, schedule?: PutOrgPayoutScheduleBodyScheduleOption1Option1|PutOrgPayoutScheduleBodyScheduleOption1Option2|PutOrgPayoutScheduleBodyScheduleOption1Option3|PutOrgPayoutScheduleBodyScheduleOption1Option4|null}
 * @phpstan-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option1 array{kind: 'monthly', dayOfMonth: int}
 * @phpstan-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option2 array{kind: 'weekly', dayOfWeek: int}
 * @phpstan-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option3 array{kind: 'twice_monthly', days: list<int>}
 * @phpstan-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option4 array{kind: 'custom', dates: list<string>}
 * @phpstan-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option2 array{kind: 'off'}
 * @phpstan-type PutProgramsIdPayoutScheduleBody array{schedule: PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option1|PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option2|PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option3|PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option4|PutProgramsIdPayoutScheduleBodyScheduleOption1Option2|null}
 * @phpstan-type PutOrgTaxProfileBody array{legalName?: string|null, address?: string|null, country?: string|null, vatId?: string|null, ein?: string|null, domesticVatBps?: int|null, viesCheck?: bool}
 * @phpstan-type PutPartnersIdVatBody array{vatId: string|null}
 * @phpstan-type PostPartnerOrgsOrgIdSelfBillingBody array{accept: bool}
 * @phpstan-type PutPartnerOrgsOrgIdVatBody array{vatId: string|null}
 * @phpstan-type PutOrgTaxFilingBodyCredentials array{apiKey: string, baseUrl?: string}
 * @phpstan-type PutOrgTaxFilingBody array{provider: 'test'|'tax1099', credentials?: PutOrgTaxFilingBodyCredentials}
 * @phpstan-type PostTax1099FilingsBody array{year: int}
 * @phpstan-type PostAdminStatusIncidentsBody array{title: string, severity?: 'notice'|'minor'|'major'|'critical'|'maintenance', state?: 'investigating'|'identified'|'monitoring'|'resolved', body?: string, components?: list<'api'|'database'|'webhooks'|'background_jobs'|'tracking'|'payouts'|'dashboard'>, startedAt?: string}
 * @phpstan-type PatchAdminStatusIncidentsIdBody array{title?: string, severity?: 'notice'|'minor'|'major'|'critical'|'maintenance', state?: 'investigating'|'identified'|'monitoring'|'resolved', body?: string, components?: list<'api'|'database'|'webhooks'|'background_jobs'|'tracking'|'payouts'|'dashboard'>}
 * @phpstan-type PostAdminStatusIncidentsIdUpdatesBody array{body: string, state: 'investigating'|'identified'|'monitoring'|'resolved'}
 * @phpstan-type PutOrgRetentionBody array{clicks?: int|null, visits?: int|null, billingPayloads?: int|null, webhookDeliveries?: int|null, notifications?: int|null, auditLog?: int|null}
 * @phpstan-type PutOrgReferralParamsBody array{params: list<string>}
 * @phpstan-type PostProgramsBodyPublicPage array{pitch?: string, autoApprove?: bool}
 * @phpstan-type PostProgramsBodyRiskPolicy array{holdBotScore?: float|int, holdRiskScore?: float|int, holdHighRiskLevel?: bool, holdDisposableEmail?: bool, holdVelocity?: int, holdUnverifiedEmail?: bool, holdSelfReferral?: bool}
 * @phpstan-type PostProgramsBodyWidget array{autoEnroll?: bool, destinationUrl?: string|null}
 * @phpstan-type PostProgramsBodyMobileAppOption1IosOption1 array{teamId: string, bundleId: string}
 * @phpstan-type PostProgramsBodyMobileAppOption1AndroidOption1 array{packageName: string, sha256CertFingerprints: list<string>}
 * @phpstan-type PostProgramsBodyMobileAppOption1 array{ios?: PostProgramsBodyMobileAppOption1IosOption1|null, android?: PostProgramsBodyMobileAppOption1AndroidOption1|null}
 * @phpstan-type PostProgramsBody array{name: string, slug: string, attributionModel?: 'last_click'|'first_click'|'position_based'|'time_decay', cookieWindowDays?: int, signupToConversionDays?: int, termsMd?: string, status?: 'draft'|'active'|'paused'|'archived', publicHandle?: string|null, publicPage?: PostProgramsBodyPublicPage, probabilisticPolicy?: 'auto'|'review'|'off', selfReferralPolicy?: 'review'|'reject', splitCommissions?: bool, utmTemplate?: array<string, string>, allowPaidSearch?: bool, challengeLinks?: bool, settlement?: 'payout'|'merchant_credit', riskPolicy?: PostProgramsBodyRiskPolicy, widget?: PostProgramsBodyWidget, mobileApp?: PostProgramsBodyMobileAppOption1|null}
 * @phpstan-type PatchProgramsIdBodyPublicPage array{pitch?: string, autoApprove?: bool}
 * @phpstan-type PatchProgramsIdBodyRiskPolicy array{holdBotScore?: float|int, holdRiskScore?: float|int, holdHighRiskLevel?: bool, holdDisposableEmail?: bool, holdVelocity?: int, holdUnverifiedEmail?: bool, holdSelfReferral?: bool}
 * @phpstan-type PatchProgramsIdBodyWidget array{autoEnroll?: bool, destinationUrl?: string|null}
 * @phpstan-type PatchProgramsIdBodyMobileAppOption1IosOption1 array{teamId: string, bundleId: string}
 * @phpstan-type PatchProgramsIdBodyMobileAppOption1AndroidOption1 array{packageName: string, sha256CertFingerprints: list<string>}
 * @phpstan-type PatchProgramsIdBodyMobileAppOption1 array{ios?: PatchProgramsIdBodyMobileAppOption1IosOption1|null, android?: PatchProgramsIdBodyMobileAppOption1AndroidOption1|null}
 * @phpstan-type PatchProgramsIdBody array{name?: string, slug?: string, attributionModel?: 'last_click'|'first_click'|'position_based'|'time_decay', cookieWindowDays?: int, signupToConversionDays?: int, termsMd?: string, status?: 'draft'|'active'|'paused'|'archived', publicHandle?: string|null, publicPage?: PatchProgramsIdBodyPublicPage, probabilisticPolicy?: 'auto'|'review'|'off', selfReferralPolicy?: 'review'|'reject', splitCommissions?: bool, utmTemplate?: array<string, string>, allowPaidSearch?: bool, challengeLinks?: bool, settlement?: 'payout'|'merchant_credit', riskPolicy?: PatchProgramsIdBodyRiskPolicy, widget?: PatchProgramsIdBodyWidget, mobileApp?: PatchProgramsIdBodyMobileAppOption1|null}
 * @phpstan-type PostProgramsIdEnrollmentsBody array{partnerId: string}
 * @phpstan-type PostPartnersBody array{email: string, displayName?: string, tags?: list<string>, notes?: string, externalRef?: string, upsert?: bool}
 * @phpstan-type PatchPartnersIdBody array{displayName?: string, status?: 'active'|'suspended'|'banned'|'archived', tags?: list<string>, notes?: string, externalRef?: string|null}
 * @phpstan-type PostApiKeysBody array{name: string, scopes?: list<'admin'|'full'|'read'|'programs:read'|'programs:write'|'partners:read'|'partners:write'|'links:read'|'links:write'|'events:read'|'events:write'|'referrals:read'|'referrals:write'|'commissions:read'|'commissions:write'|'payouts:read'|'payouts:write'|'billing:read'|'billing:write'|'webhooks:read'|'webhooks:write'|'analytics:read'|'analytics:write'|'fraud:read'|'fraud:write'|'privacy:read'|'privacy:write'|'team:read'|'team:write'|'org:read'|'org:write'|'integrations:read'|'integrations:write'|'growth:read'|'growth:write'|'audit:read'|'audit:write'>, publishable?: bool, allowedOrigins?: list<string>, apiVersion?: string, mode?: 'live'|'test'|'both', owner?: string, expiresInDays?: int}
 * @phpstan-type PatchApiKeysIdBody array{apiVersion?: string, owner?: string|null, expiresInDays?: int|null}
 * @phpstan-type PostTestClockAdvanceBody array{seconds: int}
 * @phpstan-type PostCliDeviceCodesBody array{clientName?: string}
 * @phpstan-type PostCliDeviceCodesTokenBody array{deviceCode: string}
 * @phpstan-type PostCliDeviceCodesUserCodeApproveBody array{access?: 'full'|'read'|'cli', name?: string}
 * @phpstan-type PostCliListenersBody array{topics?: list<string>, forwardTo?: string}
 * @phpstan-type PostCliTriggerBody array{topic: string, data?: array<string, mixed>}
 * @phpstan-type PostLinksBody array{programId: string, partnerId: string, code?: string, destinationUrl: string}
 * @phpstan-type PostCouponsBody array{programId: string, partnerId: string, code: string}
 * @phpstan-type PostWidgetTokensBody array{programId: string, customerRef?: string, partnerExternalRef?: string, email?: string, displayName?: string, ttlSeconds?: int}
 * @phpstan-type PostReferralsAssociateBody array{programId: string, customerRef: string, anonId?: string, referralToken?: string, couponCode?: string, emailHash?: string, ip?: string, ua?: string, idempotencyKey?: string, occurredAt?: string, emailDomain?: string}
 * @phpstan-type PatchReferralsIdBody array{status: 'paused'|'active'}
 * @phpstan-type PostReferralsIdReassignBody array{partnerId: string}
 * @phpstan-type PostAttributionReplayBody array{programId: string}
 * @phpstan-type PostTrackEventsBodyOption1 array{programId: string, partnerId: string, linkId?: string, url?: string, anonId?: string, ip?: string, ua?: string, type: 'click'}
 * @phpstan-type PostTrackEventsBodyOption2 array{programId: string, partnerId: string, linkId?: string, url?: string, anonId?: string, ip?: string, ua?: string, type: 'custom'}
 * @phpstan-type PostTrackEventsBodyOption3 array{type: 'event', programId: string, customerRef: string, event: string, occurredAt?: string, idempotencyKey?: string}
 * @phpstan-type PostCommissionRulesBodyConfigBaseOption1 array{kind: 'percent', bps: int}
 * @phpstan-type PostCommissionRulesBodyConfigBaseOption2 array{kind: 'fixed', amountMinor: int, currency: string}
 * @phpstan-type PostCommissionRulesBodyConfigRecurringOption1 array{type: 'one_time'}
 * @phpstan-type PostCommissionRulesBodyConfigRecurringOption2 array{type: 'lifetime'}
 * @phpstan-type PostCommissionRulesBodyConfigRecurringOption3 array{type: 'months', months: int}
 * @phpstan-type PostCommissionRulesBodyConfigConditionsMetadataItem array{key: string, equals?: string|float|int|bool, in?: list<string|float|int|bool>}
 * @phpstan-type PostCommissionRulesBodyConfigConditions array{countries?: list<string>, excludeCountries?: list<string>, metadata?: list<PostCommissionRulesBodyConfigConditionsMetadataItem>}
 * @phpstan-type PostCommissionRulesBodyConfigOverridesItemMatchMetadataItem array{key: string, equals?: string|float|int|bool, in?: list<string|float|int|bool>}
 * @phpstan-type PostCommissionRulesBodyConfigOverridesItemMatch array{partnerId?: string, linkId?: string, productRef?: string, countries?: list<string>, metadata?: list<PostCommissionRulesBodyConfigOverridesItemMatchMetadataItem>}
 * @phpstan-type PostCommissionRulesBodyConfigOverridesItemBaseOption1 array{kind: 'percent', bps: int}
 * @phpstan-type PostCommissionRulesBodyConfigOverridesItemBaseOption2 array{kind: 'fixed', amountMinor: int, currency: string}
 * @phpstan-type PostCommissionRulesBodyConfigOverridesItem array{match: PostCommissionRulesBodyConfigOverridesItemMatch, base: PostCommissionRulesBodyConfigOverridesItemBaseOption1|PostCommissionRulesBodyConfigOverridesItemBaseOption2}
 * @phpstan-type PostCommissionRulesBodyConfigTiersItem array{minCustomers: int, bps: int}
 * @phpstan-type PostCommissionRulesBodyConfigBountiesItem array{event: string, amountMinor: int, currency: string}
 * @phpstan-type PostCommissionRulesBodyConfigSubAffiliate array{levels: int, ratesBps: list<int>}
 * @phpstan-type PostCommissionRulesBodyConfigNewVsExpansion array{newBps: int, expansionBps: int}
 * @phpstan-type PostCommissionRulesBodyConfig array{base: PostCommissionRulesBodyConfigBaseOption1|PostCommissionRulesBodyConfigBaseOption2, appliesTo?: 'gross'|'net_of_tax'|'net_of_fees', recurring?: PostCommissionRulesBodyConfigRecurringOption1|PostCommissionRulesBodyConfigRecurringOption2|PostCommissionRulesBodyConfigRecurringOption3, holdDays?: int, rounding?: 'half_even'|'floor', conditions?: PostCommissionRulesBodyConfigConditions, overrides?: list<PostCommissionRulesBodyConfigOverridesItem>, tiers?: list<PostCommissionRulesBodyConfigTiersItem>, bounties?: list<PostCommissionRulesBodyConfigBountiesItem>, subAffiliate?: PostCommissionRulesBodyConfigSubAffiliate, newVsExpansion?: PostCommissionRulesBodyConfigNewVsExpansion}
 * @phpstan-type PostCommissionRulesBody array{programId: string, config: PostCommissionRulesBodyConfig}
 * @phpstan-type PostCommissionsIdAdjustBody array{amountMinor: int, memo: string, allowNegative?: bool}
 * @phpstan-type PostCommissionsIdSettleBody array{method?: 'store_credit', reference: string, memo?: string}
 * @phpstan-type PostBillingConnectionsBody array{provider: 'stripe'|'paddle'|'lemonsqueezy'|'polar'|'chargebee'|'shopify'|'generic'|'recurly'|'braintree'|'woocommerce'|'bigcommerce', name?: string, webhookSecret?: string}
 * @phpstan-type PutBillingConnectionsIdSecretBody array{webhookSecret: string}
 * @phpstan-type PutBillingConnectionsIdCredentialsBody array{apiKey?: string, apiToken?: string, storeHash?: string, region?: 'us'|'eu'}
 * @phpstan-type PatchBillingConnectionsIdBody array{status?: 'active'|'paused', name?: string}
 * @phpstan-type PutBillingConnectionsIdValueMappingBody array{cash?: string, creditApplied?: string, discount?: string, cost?: string, productRef?: string, unit: 'minor'|'major'}
 * @phpstan-type PostBillingConnectionsIdValueMappingPreviewBodyMapping array{cash?: string, creditApplied?: string, discount?: string, cost?: string, productRef?: string, unit: 'minor'|'major'}
 * @phpstan-type PostBillingConnectionsIdValueMappingPreviewBody array{payload: mixed, currency?: string, mapping?: PostBillingConnectionsIdValueMappingPreviewBodyMapping}
 * @phpstan-type PutPartnersIdPayoutProfileBody array{method: 'paypal'|'wise'|'stripe_connect'|'ach'|'crypto'|'payoneer'|'tremendous'|'csv', details?: array<string, mixed>, payoutCurrency?: string, minThresholdMinor?: int}
 * @phpstan-type PatchPartnersIdPayoutProfileBody array{minThresholdMinor: int}
 * @phpstan-type PostPartnersIdTaxFormBody array{type: 'w9'|'w8ben'|'w8bene', data: mixed}
 * @phpstan-type PostFxRatesBody array{base: string, quote: string, rate: string|float|int, effectiveAt?: string}
 * @phpstan-type PutOrgFxFeedBody array{enabled: bool}
 * @phpstan-type PostFxRatesClearOverrideBody array{base: string, quote: string}
 * @phpstan-type PutPayoutConnectionsProviderBodyOption1 array{clientId: string, secret: string, env?: 'sandbox'|'live'}
 * @phpstan-type PutPayoutConnectionsProviderBodyOption2 array{secretKey: string, env?: 'sandbox'|'live'}
 * @phpstan-type PutPayoutConnectionsProviderBodyOption3 array{apiKey: string, walletId: string, defaultChain?: string, env?: 'sandbox'|'live'}
 * @phpstan-type PutPayoutConnectionsProviderBodyOption4 array{apiToken: string, profileId: string, env?: 'sandbox'|'live'}
 * @phpstan-type PutPayoutConnectionsProviderBodyOption5 array{clientId: string, secret: string, programId: string, env?: 'sandbox'|'live'}
 * @phpstan-type PutPayoutConnectionsProviderBodyOption6 array{apiKey: string, fundingSourceId: string, campaignId?: string, env?: 'sandbox'|'live'}
 * @phpstan-type PostFraudInvalidTrafficScanBody array{windowHours?: int}
 * @phpstan-type PostFraudCasesIdResolveBody array{action: 'dismiss'|'void_referral'|'suspend_partner'|'ban_partner'}
 * @phpstan-type PutProfitabilitySettingsBody array{reportingCurrency?: string, defaultMarginBps?: int|null, creditCostModel?: 'face'|'margin'|'fixed_ratio', creditCostRatioBps?: int, inference?: 'fifo_next_payments'|'report_only'|'on_grant', creditDraw?: 'grants_first'|'pro_rata', windowDays?: int, churnWindowDays?: int, countReferrerSpend?: bool, costToServeMinorPerMonth?: int, taxFeesReduceProfit?: bool, valuePatternWeight?: float|int, targetRoiBps?: int|null, programId?: string}
 * @phpstan-type PutProfitabilityProductsProductRefBody array{marginBps?: int, unitCostMinor?: int, currency?: string}
 * @phpstan-type PostRoiPatternsPatternReviewBody array{customerRef?: string, partnerId?: string, programId?: string}
 * @phpstan-type PostValueEventsBody array{events: list<mixed>}
 * @phpstan-type PostValueImportBody array{csv: string, mapping: array<string, 'kind'|'customerRef'|'partnerId'|'partnerExternalRef'|'creditGrantId'|'referralId'|'programId'|'productRef'|'currency'|'externalId'|'invoiceRef'|'provider'|'occurredAt'|'role'|'cashMinor'|'creditAppliedMinor'|'discountMinor'|'taxMinor'|'feesMinor'|'costMinor'|'faceMinor'|'cashMajor'|'creditAppliedMajor'|'discountMajor'|'taxMajor'|'feesMajor'|'costMajor'|'faceMajor'>, kind?: 'payment'|'refund'|'credit_granted'|'credit_redeemed'|'credit_expired'|'credit_revoked'|'cost'|'adjustment', dryRun?: bool, defaultCurrency?: string}
 * @phpstan-type PostPartnerKycSubmitBody array{legalName: string, country: string, dateOfBirth?: string, documentRef?: string}
 * @phpstan-type PostPartnerLinksBody array{orgId: string, programId: string, destinationUrl: string, assetId?: string, code?: string}
 * @phpstan-type PostPartnerDisputesBody array{orgId: string, referralId?: string, kind: 'missing_attribution'|'unpaid_commission', detail: string}
 * @phpstan-type PutPartnerOrgsOrgIdPayoutProfileBody array{method: 'paypal'|'wise'|'stripe_connect'|'ach'|'crypto'|'payoneer'|'tremendous'|'csv', details?: array<string, mixed>, payoutCurrency?: string}
 * @phpstan-type PostPartnerOrgsOrgIdTaxFormBody array{type: 'w9'|'w8ben'|'w8bene', data: mixed}
 * @phpstan-type PostWebhookEndpointsBody array{url: string, topics?: list<string>, legacySignature?: bool, programIds?: list<string>|null}
 * @phpstan-type PatchWebhookEndpointsIdBody array{status?: 'active'|'paused', url?: string, topics?: list<string>, legacySignature?: bool, programIds?: list<string>|null}
 * @phpstan-type PostSandboxSimulateBody array{programId: string, partnerId: string, scenario?: 'subscription'|'refund'|'churn', priceMinor?: int, months?: int}
 * @phpstan-type PostImportProviderBody array{csv: string}
 * @phpstan-type PutBrandingBody array{logoUrl?: string, theme?: array<string, string>, emailFrom?: string}
 * @phpstan-type PostBrandingLinkDomainBody array{domain: string}
 * @phpstan-type PostBrandingDomainBody array{domain: string}
 * @phpstan-type PostEmbedTokensBody array{partnerEmail: string}
 * @phpstan-type PostDiscoverySearchBody array{keywords: list<string>, category?: string}
 * @phpstan-type PostDiscoveryCorpusBodyEntriesItem array{name: string, url: string, channel?: 'youtube'|'blog'|'newsletter'|'podcast'|'x', audienceSize?: int, language?: string, categories?: list<string>, keywords?: list<string>, contactEmail?: string, html?: string, evidenceSnippet?: string, evidenceSource?: string}
 * @phpstan-type PostDiscoveryCorpusBody array{keywords?: list<string>, entries: list<PostDiscoveryCorpusBodyEntriesItem>}
 * @phpstan-type PostOutreachDraftBody array{prospectId: string, programName?: string}
 * @phpstan-type PutMarketplaceListingBody array{programId: string, visibility?: 'public'|'unlisted', category?: string, headline?: string, description?: string, sponsored?: bool}
 * @phpstan-type PostDisputesIdResolveBody array{resolution: string}
 * @phpstan-type PutPartnerProfileBodyChannelsItem array{type: 'youtube'|'blog'|'newsletter'|'podcast'|'x'|'tiktok'|'instagram'|'other', handle?: string, url?: string, audience?: int}
 * @phpstan-type PutPartnerProfileBodyAudienceCountriesItem array{code: string, pct: float|int}
 * @phpstan-type PutPartnerProfileBodyAudience array{countries?: list<PutPartnerProfileBodyAudienceCountriesItem>, age?: array<string, float|int>, gender?: array<string, float|int>}
 * @phpstan-type PutPartnerProfileBody array{published?: bool, headline?: string, bio?: string, categories?: list<string>, languages?: list<string>, country?: string, channels?: list<PutPartnerProfileBodyChannelsItem>, website?: string, acceptsInvites?: bool, audience?: PutPartnerProfileBodyAudience, engagementBps?: int}
 * @phpstan-type PostCreatorsAccountIdInviteBody array{programId: string, message?: string}
 * @phpstan-type PostBillingCheckoutBody array{plan: 'growth'|'pro'|'scale'}
 * @phpstan-type PostBillingActivateBody array{plan: 'free'|'growth'|'pro'|'scale'|'starter'}
 * @phpstan-type PutProgramsIdRefereeRewardBody array{enabled?: bool, kind?: 'store_credit'|'coupon'|'gift_card', amountMinor?: int, bps?: int, capMinor?: int, on?: 'first_commission'|'first_payment', rounding?: 'half_even'|'floor', currency?: string}
 * @phpstan-type PostRewardsRedeemByCodeBody array{amountMinor?: int, billingEventId?: string, invoiceRef?: string, externalId?: string, occurredAt?: mixed, code: string}
 * @phpstan-type PostRewardsIdRedeemBody array{amountMinor?: int, billingEventId?: string, invoiceRef?: string, externalId?: string, occurredAt?: mixed}
 * @phpstan-type PostProgramsIdGroupsBodyBaseOption1Option1 array{kind: 'percent', bps: int}
 * @phpstan-type PostProgramsIdGroupsBodyBaseOption1Option2 array{kind: 'fixed', amountMinor: int, currency: string}
 * @phpstan-type PostProgramsIdGroupsBody array{name: string, base?: PostProgramsIdGroupsBodyBaseOption1Option1|PostProgramsIdGroupsBodyBaseOption1Option2|null, holdDays?: int|null, minThresholdMinor?: int|null, payoutCurrency?: string|null, onboardingMessage?: string|null, onboardingChecklist?: list<string>}
 * @phpstan-type PatchPartnerGroupsIdBodyBaseOption1Option1 array{kind: 'percent', bps: int}
 * @phpstan-type PatchPartnerGroupsIdBodyBaseOption1Option2 array{kind: 'fixed', amountMinor: int, currency: string}
 * @phpstan-type PatchPartnerGroupsIdBody array{name?: string, base?: PatchPartnerGroupsIdBodyBaseOption1Option1|PatchPartnerGroupsIdBodyBaseOption1Option2|null, holdDays?: int|null, minThresholdMinor?: int|null, payoutCurrency?: string|null, onboardingMessage?: string|null, onboardingChecklist?: list<string>, archived?: bool}
 * @phpstan-type PutProgramsIdPartnersPartnerIdGroupBody array{groupId: string|null}
 * @phpstan-type PostProgramsIdPromotionsBodyEffectOption1BaseOption1 array{kind: 'percent', bps: int}
 * @phpstan-type PostProgramsIdPromotionsBodyEffectOption1BaseOption2 array{kind: 'fixed', amountMinor: int, currency: string}
 * @phpstan-type PostProgramsIdPromotionsBodyEffectOption1 array{kind: 'replace', base: PostProgramsIdPromotionsBodyEffectOption1BaseOption1|PostProgramsIdPromotionsBodyEffectOption1BaseOption2}
 * @phpstan-type PostProgramsIdPromotionsBodyEffectOption2 array{kind: 'boost', bps: int}
 * @phpstan-type PostProgramsIdPromotionsBody array{name: string, groupId?: string|null, effect: PostProgramsIdPromotionsBodyEffectOption1|PostProgramsIdPromotionsBodyEffectOption2, startsAt: string, endsAt: string}
 * @phpstan-type PostContractsBodyCompensationOption1 array{kind: 'percent', bps: int}
 * @phpstan-type PostContractsBodyCompensationOption2 array{kind: 'fixed', amountMinor: int, currency: string}
 * @phpstan-type PostContractsBody array{programId: string, partnerId: string, title?: string, termsMd?: string, compensation: PostContractsBodyCompensationOption1|PostContractsBodyCompensationOption2, send?: bool}
 * @phpstan-type PutProgramsIdIncrementalityBody array{holdoutBps: int}
 * @phpstan-type PutProgramsIdAutopricingBody array{enabled?: bool, targetRoas?: float|int, minBps?: int, maxBps?: int, objective?: 'roas'|'roi', targetRoi?: float|int}
 * @phpstan-type PostProgramsIdAutopriceRunBody array{objective?: 'roas'|'roi'}
 * @phpstan-type PostPassportVerifyBody array{passport: mixed}
 * @phpstan-type PostPartnerAdvanceAcceptBody array{amountMinor: int}
 * @phpstan-type PutNetworkSettingsBody array{enabled: bool}
 * @phpstan-type PutProgramsIdNegotiationPolicyBody array{enabled?: bool, minBps: int, maxBps: int, autoAcceptMaxBps: int}
 * @phpstan-type PostAdminOrgsIdSuspendBody array{reason?: string}
 * @phpstan-type PostAdminOrgsIdPlanBody array{plan: 'free'|'growth'|'pro'|'scale'|'starter'}
 * @phpstan-type PostAssetsBody array{programId: string, kind: 'banner'|'copy'|'video'|'logo', title: string, content?: string, dimensions?: string, groupId?: string|null}
 * @phpstan-type PostPartnerDealsBody array{orgId: string, programId: string, company: string, contactEmail: string, valueMinor?: int, currency?: string, notes?: string}
 * @phpstan-type PostDealsIdApproveBody array{protectionDays?: int}
 * @phpstan-type PostDealsIdWonBody array{customerRef: string}
 * @phpstan-type PutPartnerOrgsOrgIdPostbackBody array{url: string}
 * @phpstan-type PostPrivacyForgetBody array{email?: string, customerRef?: string, partnerId?: string}
 * @phpstan-type PostPrivacyLookupBody array{email: string}
 * @phpstan-type PostPrivacyRequestsBodySubject array{email?: string, customerRef?: string, partnerId?: string}
 * @phpstan-type PostPrivacyRequestsBody array{subject: PostPrivacyRequestsBodySubject, type: 'access'|'erasure'}
 * @phpstan-type PutEmailSettingsBody array{provider?: 'resend'|'brevo'|'postmark'|null, apiKey?: string|null, fromAddress?: string|null, fromName?: string|null, replyTo?: string|null, defaultLocale?: 'en'|'es'|'de'|'fr'|'pt'|'it'|'nl'|'sv'|'ja'|'zh', logoUrl?: string|null, primaryColor?: string|null}
 * @phpstan-type PutEmailTemplatesEventLocaleBody array{subject: string, text: string, html?: string|null}
 * @phpstan-type PostEmailPreviewBodyDraft array{subject: string, text: string, html?: string|null}
 * @phpstan-type PostEmailPreviewBody array{event: 'payout_sent'|'payout_failed'|'invitation_received'|'partner_approved'|'contract_sent'|'webhook_endpoint_disabled'|'tax_document_ready', locale: 'en'|'es'|'de'|'fr'|'pt'|'it'|'nl'|'sv'|'ja'|'zh', draft?: PostEmailPreviewBodyDraft}
 * @phpstan-type PostEmailTestBody array{event: 'payout_sent'|'payout_failed'|'invitation_received'|'partner_approved'|'contract_sent'|'webhook_endpoint_disabled'|'tax_document_ready', locale: 'en'|'es'|'de'|'fr'|'pt'|'it'|'nl'|'sv'|'ja'|'zh', to: string}
 * @phpstan-type PutMeLocaleBody array{locale: 'en'|'es'|'de'|'fr'|'pt'|'it'|'nl'|'sv'|'ja'|'zh'}
 * @phpstan-type PutMeRoiDigestBody array{enabled: bool}
 * @phpstan-type PutPartnerLocaleBody array{locale: 'en'|'es'|'de'|'fr'|'pt'|'it'|'nl'|'sv'|'ja'|'zh'}
 * @phpstan-type PutIntegrationsHubspotBody array{token?: string, pipeline?: string|null, newDealStage?: string|null, paidDealStage?: string|null, status?: 'active'|'paused'}
 * @phpstan-type PutIntegrationsSegmentBody array{writeKey?: string, events?: list<'referral.created'|'commission.earned'|'commission.reversed'|'commission.settled'|'payout.sent'|'payout.failed'|'partner.applied'|'partner.enrolled'|'partner.approved'>|null, status?: 'active'|'paused'}
 * @phpstan-type PostIntegrationsHubspotTestBody array{setupProperties?: bool}
 * @phpstan-type PostZapierHooksBody array{target_url: string, event: 'referral.created'|'commission.earned'|'commission.reversed'|'commission.settled'|'payout.sent'|'payout.failed'|'partner.applied'|'partner.enrolled'|'partner.approved'|'deal.submitted'|'fraud.case_opened'}
 * @phpstan-type PostZapierConversionsBody array{providerEventId: string, type?: 'invoice_paid'|'refund', customerRef: string, amountMinor: int, currency?: string, invoiceRef?: string, occurredAt?: string, connectionId?: string}
 * @phpstan-type PostPartnerSecurityTotpEnableBody array{code: string}
 * @phpstan-type PostPartnerSecurityTotpDisableBody array{code: string}
 * @phpstan-type PostAuthConnectionsBodyKeys array{referralToken?: string, anonId?: string, couponCode?: string, programId?: string, autoEnroll?: string}
 * @phpstan-type PostAuthConnectionsBody array{provider: 'clerk'|'supabase'|'workos'|'generic'|'atlas'|'custom', programId: string, instanceId?: string, autoEnrollUsers?: bool, destinationUrl?: string, name?: string, secret?: string, keys?: PostAuthConnectionsBodyKeys}
 * @phpstan-type PatchAuthConnectionsIdBody array{status?: 'active'|'paused', name?: string, autoEnrollUsers?: bool, destinationUrl?: string|null, signatureVersion?: 'v1+v2'|'v2'}
 * @phpstan-type PostAuthConnectionsIdSignupsBodyReferral array{code?: string, clickId?: string, anonId?: string, capturedAt?: string, consent?: 'granted'|'not_required'}
 * @phpstan-type PostAuthConnectionsIdSignupsBodyRisk array{botScore?: float|int, disposableEmail?: bool, emailVerified?: bool, selfReferral?: bool, velocity?: int, reasons?: list<string>, score?: float|int, level?: 'low'|'medium'|'high', dropped?: bool}
 * @phpstan-type PostAuthConnectionsIdSignupsBody array{customerRef: string, email?: string, emailHash?: string, name?: string, ip?: string, ua?: string, signedUpAt: string, referral?: PostAuthConnectionsIdSignupsBodyReferral, risk?: PostAuthConnectionsIdSignupsBodyRisk, emailDomain?: string, referralCode?: string, autoEnroll?: bool, test?: bool}
 * @phpstan-type PostAuthConnectionsIdEraseBody array{customerRef: string}
 * @phpstan-type PostAuthConnectionsIdAliasesBody array{fromCustomerRef: string, toCustomerRef: string}
 * @phpstan-type PostAuthConnectionsIdUsersBody array{customerRef: string, email?: string, name?: string, status?: 'active'|'suspended'|'deleted'}
 * @phpstan-type PostAuthConnectionsIdSignalsBody array{customerRef: string, signal: 'email_verified'|'banned'|'unbanned'|'fraud_confirmed'|'self_referral', at?: string, details?: array<string, mixed>}
 * @phpstan-type PatchOrgSsoBody array{requireSso?: bool, roleMapping?: array<string, 'owner'|'admin'|'finance'|'analyst'|'support'>}
 * @phpstan-type PostOrgSsoTicketsBody array{expiresInDays?: int}
 * @phpstan-type PostPartnerAuthWalletNonceBody array{address: string}
 * @phpstan-type PostPartnerAuthWalletVerifyBody array{address: string, nonce: string, signature: string, name?: string}
 * @phpstan-type PostOnchainConnectionsBody array{programId: string, name?: string, secret?: string, decimals?: array<string, int>}
 * @phpstan-type PostPublicProgramsHandleJoinBody array{destinationUrl?: string}
 * @phpstan-type PostGraphqlBody array{query: string, variables?: array<string, mixed>, operationName?: string}
 */
final class Models
{
}
