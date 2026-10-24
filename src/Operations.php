<?php

// Code generated from the Referalli OpenAPI document. DO NOT EDIT.
// Changes belong in the generator, which overwrites this file.

declare(strict_types=1);

namespace Referalli;

/**
 * One method per Referalli API operation, generated from the OpenAPI document.
 *
 * @phpstan-import-type Ok from Models
 * @phpstan-import-type OkStatus from Models
 * @phpstan-import-type AmountsValueItem from Models
 * @phpstan-import-type Amounts from Models
 * @phpstan-import-type Balance from Models
 * @phpstan-import-type ProgramSettingsRiskPolicy from Models
 * @phpstan-import-type ProgramSettingsWidget from Models
 * @phpstan-import-type ProgramSettingsMobileAppOption1IosOption1 from Models
 * @phpstan-import-type ProgramSettingsMobileAppOption1AndroidOption1 from Models
 * @phpstan-import-type ProgramSettingsMobileAppOption1 from Models
 * @phpstan-import-type ProgramSettings from Models
 * @phpstan-import-type ProgramPublicPage from Models
 * @phpstan-import-type Program from Models
 * @phpstan-import-type Partner from Models
 * @phpstan-import-type NetworkWarning from Models
 * @phpstan-import-type Enrollment from Models
 * @phpstan-import-type Link from Models
 * @phpstan-import-type CreatedLink from Models
 * @phpstan-import-type Coupon from Models
 * @phpstan-import-type ReasonNote from Models
 * @phpstan-import-type PayoutScheduleValueOption1 from Models
 * @phpstan-import-type PayoutScheduleValueOption2 from Models
 * @phpstan-import-type PayoutScheduleValueOption3 from Models
 * @phpstan-import-type PayoutScheduleValueOption4 from Models
 * @phpstan-import-type PayoutSchedule from Models
 * @phpstan-import-type AttributionReasoning from Models
 * @phpstan-import-type ReferralTouchCreditsItem from Models
 * @phpstan-import-type Referral from Models
 * @phpstan-import-type SignupReasonCode from Models
 * @phpstan-import-type AssociateResponseReferralOption1TouchCreditsItem from Models
 * @phpstan-import-type AssociateResponseReferralOption1 from Models
 * @phpstan-import-type AssociateResponseReasoning from Models
 * @phpstan-import-type AssociateResponse from Models
 * @phpstan-import-type CommissionEvent from Models
 * @phpstan-import-type CommissionLine from Models
 * @phpstan-import-type Settlement from Models
 * @phpstan-import-type CommissionRule from Models
 * @phpstan-import-type BillingFilter from Models
 * @phpstan-import-type ValueMapping from Models
 * @phpstan-import-type ValueMappingPreviewValue from Models
 * @phpstan-import-type ValueMappingPreviewWouldRecordItem from Models
 * @phpstan-import-type ValueMappingPreviewEventsItemValue from Models
 * @phpstan-import-type ValueMappingPreviewEventsItemWouldRecordItem from Models
 * @phpstan-import-type ValueMappingPreviewEventsItem from Models
 * @phpstan-import-type ValueMappingPreview from Models
 * @phpstan-import-type BillingConnectionRotation from Models
 * @phpstan-import-type BillingConnection from Models
 * @phpstan-import-type CreatedBillingConnection from Models
 * @phpstan-import-type BillingEvent from Models
 * @phpstan-import-type InternalCustomer from Models
 * @phpstan-import-type IdentityProviderSampleHookOption1 from Models
 * @phpstan-import-type IdentityProviderMetadataPaths from Models
 * @phpstan-import-type IdentityProvider from Models
 * @phpstan-import-type WebhookEndpointRotation from Models
 * @phpstan-import-type WebhookEndpointLastFailureOption1 from Models
 * @phpstan-import-type WebhookEndpoint from Models
 * @phpstan-import-type HealthCheck from Models
 * @phpstan-import-type WebhookDelivery from Models
 * @phpstan-import-type PayoutProfile from Models
 * @phpstan-import-type TaxProfile from Models
 * @phpstan-import-type TaxFilingDocumentsItem from Models
 * @phpstan-import-type TaxFiling from Models
 * @phpstan-import-type NecPreviewRecipientsItem from Models
 * @phpstan-import-type NecPreview from Models
 * @phpstan-import-type InvoiceSupplier from Models
 * @phpstan-import-type InvoiceCustomer from Models
 * @phpstan-import-type InvoiceSelfBilling from Models
 * @phpstan-import-type Invoice from Models
 * @phpstan-import-type PayoutRunCreatedPayoutsItemFxAppliedItem from Models
 * @phpstan-import-type PayoutRunCreatedPayoutsItem from Models
 * @phpstan-import-type PayoutRunCreatedSkippedItem from Models
 * @phpstan-import-type PayoutRunCreated from Models
 * @phpstan-import-type PayoutRun from Models
 * @phpstan-import-type Payout from Models
 * @phpstan-import-type FxRate from Models
 * @phpstan-import-type Org from Models
 * @phpstan-import-type Member from Models
 * @phpstan-import-type IssuedApiKey from Models
 * @phpstan-import-type ApiKeyCreatedByOption1 from Models
 * @phpstan-import-type ApiKey from Models
 * @phpstan-import-type AuthConnectionRotation from Models
 * @phpstan-import-type AuthConnection from Models
 * @phpstan-import-type CreatedAuthConnection from Models
 * @phpstan-import-type FraudCase from Models
 * @phpstan-import-type CustomerExport from Models
 * @phpstan-import-type PartnerExport from Models
 * @phpstan-import-type PrivacyRequest from Models
 * @phpstan-import-type GraphReferral from Models
 * @phpstan-import-type GraphPartner from Models
 * @phpstan-import-type CreatorProfileStats from Models
 * @phpstan-import-type CreatorProfile from Models
 * @phpstan-import-type EmailSettings from Models
 * @phpstan-import-type EmailRendered from Models
 * @phpstan-import-type Notification from Models
 * @phpstan-import-type Passport from Models
 * @phpstan-import-type IncidentUpdatesItem from Models
 * @phpstan-import-type Incident from Models
 * @phpstan-import-type RetentionPolicy from Models
 * @phpstan-import-type RetentionLimitsValue from Models
 * @phpstan-import-type RetentionLastRunOption1 from Models
 * @phpstan-import-type Retention from Models
 * @phpstan-import-type PartnerGroupBaseOption1Option1 from Models
 * @phpstan-import-type PartnerGroupBaseOption1Option2 from Models
 * @phpstan-import-type PartnerGroup from Models
 * @phpstan-import-type PromotionEffectOption1BaseOption1 from Models
 * @phpstan-import-type PromotionEffectOption1BaseOption2 from Models
 * @phpstan-import-type PromotionEffectOption1 from Models
 * @phpstan-import-type PromotionEffectOption2 from Models
 * @phpstan-import-type Promotion from Models
 * @phpstan-import-type IntegrationConnection from Models
 * @phpstan-import-type IntegrationDelivery from Models
 * @phpstan-import-type ZapierHook from Models
 * @phpstan-import-type RoiIncrementalTreatment from Models
 * @phpstan-import-type RoiIncrementalControl from Models
 * @phpstan-import-type RoiIncrementalExcludedReferrals from Models
 * @phpstan-import-type RoiIncrementalExcludedItem from Models
 * @phpstan-import-type RoiIncremental from Models
 * @phpstan-import-type RoiProjectionCohortsItem from Models
 * @phpstan-import-type RoiProjection from Models
 * @phpstan-import-type RoiSummaryCoverage from Models
 * @phpstan-import-type RoiSummaryTargetOption1 from Models
 * @phpstan-import-type RoiSummary from Models
 * @phpstan-import-type RoiGrantMetricsExcludedItem from Models
 * @phpstan-import-type RoiGrantMetrics from Models
 * @phpstan-import-type RoiGrant from Models
 * @phpstan-import-type RoiPatternEntrySubject from Models
 * @phpstan-import-type RoiPatternEntry from Models
 * @phpstan-import-type RoiTraceSubject from Models
 * @phpstan-import-type RoiTraceEventsItem from Models
 * @phpstan-import-type RoiTraceRunningNetItem from Models
 * @phpstan-import-type RoiTraceExcludedItem from Models
 * @phpstan-import-type RoiTrace from Models
 * @phpstan-import-type AuditLogEntry from Models
 * @phpstan-import-type EmailTemplateEventLocalesItemDefault from Models
 * @phpstan-import-type EmailTemplateEventLocalesItemOverrideOption1 from Models
 * @phpstan-import-type EmailTemplateEventLocalesItem from Models
 * @phpstan-import-type EmailTemplateEvent from Models
 * @phpstan-import-type ErrorError from Models
 * @phpstan-import-type Error from Models
 * @phpstan-import-type ClickRecordedEventData from Models
 * @phpstan-import-type ClickRecordedEvent from Models
 * @phpstan-import-type ReferralCreatedEventData from Models
 * @phpstan-import-type ReferralCreatedEvent from Models
 * @phpstan-import-type ReferralHeldEventData from Models
 * @phpstan-import-type ReferralHeldEvent from Models
 * @phpstan-import-type ReferralApprovedEventData from Models
 * @phpstan-import-type ReferralApprovedEvent from Models
 * @phpstan-import-type ReferralVoidedEventData from Models
 * @phpstan-import-type ReferralVoidedEvent from Models
 * @phpstan-import-type ReferralPausedEventData from Models
 * @phpstan-import-type ReferralPausedEvent from Models
 * @phpstan-import-type ReferralResumedEventData from Models
 * @phpstan-import-type ReferralResumedEvent from Models
 * @phpstan-import-type ReferralReassignedEventData from Models
 * @phpstan-import-type ReferralReassignedEvent from Models
 * @phpstan-import-type ReferralRejectedEventData from Models
 * @phpstan-import-type ReferralRejectedEvent from Models
 * @phpstan-import-type CustomerAliasedEventData from Models
 * @phpstan-import-type CustomerAliasedEvent from Models
 * @phpstan-import-type CommissionEarnedEventData from Models
 * @phpstan-import-type CommissionEarnedEvent from Models
 * @phpstan-import-type CommissionReversedEventData from Models
 * @phpstan-import-type CommissionReversedEvent from Models
 * @phpstan-import-type CommissionSettledEventData from Models
 * @phpstan-import-type CommissionSettledEvent from Models
 * @phpstan-import-type PartnerAppliedEventData from Models
 * @phpstan-import-type PartnerAppliedEvent from Models
 * @phpstan-import-type PartnerEnrolledEventData from Models
 * @phpstan-import-type PartnerEnrolledEvent from Models
 * @phpstan-import-type PartnerApprovedEventData from Models
 * @phpstan-import-type PartnerApprovedEvent from Models
 * @phpstan-import-type PartnerLevelUpEventData from Models
 * @phpstan-import-type PartnerLevelUpEvent from Models
 * @phpstan-import-type PayoutScheduledEventData from Models
 * @phpstan-import-type PayoutScheduledEvent from Models
 * @phpstan-import-type PayoutSubmittedEventData from Models
 * @phpstan-import-type PayoutSubmittedEvent from Models
 * @phpstan-import-type PayoutSentEventData from Models
 * @phpstan-import-type PayoutSentEvent from Models
 * @phpstan-import-type PayoutFailedEventData from Models
 * @phpstan-import-type PayoutFailedEvent from Models
 * @phpstan-import-type PayoutCancelledEventData from Models
 * @phpstan-import-type PayoutCancelledEvent from Models
 * @phpstan-import-type TaxFormDeliveredEventData from Models
 * @phpstan-import-type TaxFormDeliveredEvent from Models
 * @phpstan-import-type RefereeRewardEarnedEventData from Models
 * @phpstan-import-type RefereeRewardEarnedEvent from Models
 * @phpstan-import-type CreditRedeemedEventData from Models
 * @phpstan-import-type CreditRedeemedEvent from Models
 * @phpstan-import-type BillingEventRecordedEventData from Models
 * @phpstan-import-type BillingEventRecordedEvent from Models
 * @phpstan-import-type RoiPaybackReachedEventData from Models
 * @phpstan-import-type RoiPaybackReachedEvent from Models
 * @phpstan-import-type RoiPatternDetectedEventData from Models
 * @phpstan-import-type RoiPatternDetectedEvent from Models
 * @phpstan-import-type FraudCaseOpenedEventData from Models
 * @phpstan-import-type FraudCaseOpenedEvent from Models
 * @phpstan-import-type DealSubmittedEventData from Models
 * @phpstan-import-type DealSubmittedEvent from Models
 * @phpstan-import-type DisputeResolvedEventData from Models
 * @phpstan-import-type DisputeResolvedEvent from Models
 * @phpstan-import-type PrivacyRequestCompletedEventData from Models
 * @phpstan-import-type PrivacyRequestCompletedEvent from Models
 * @phpstan-import-type WebhookEndpointDisabledEventData from Models
 * @phpstan-import-type WebhookEndpointDisabledEvent from Models
 * @phpstan-import-type WebhookEndpointFailingEventData from Models
 * @phpstan-import-type WebhookEndpointFailingEvent from Models
 * @phpstan-import-type WebhookEndpointRecoveredEventData from Models
 * @phpstan-import-type WebhookEndpointRecoveredEvent from Models
 * @phpstan-import-type PostTOrgTokenVisitResponse from Models
 * @phpstan-import-type GetTOrgTokenCodesCodeResponseRefereeRewardOption1 from Models
 * @phpstan-import-type GetTOrgTokenCodesCodeResponse from Models
 * @phpstan-import-type GetTOrgTokenWidgetMeResponseProgram from Models
 * @phpstan-import-type GetTOrgTokenWidgetMeResponsePartner from Models
 * @phpstan-import-type GetTOrgTokenWidgetMeResponseShareOption1 from Models
 * @phpstan-import-type GetTOrgTokenWidgetMeResponseProgress from Models
 * @phpstan-import-type GetTOrgTokenWidgetMeResponseEarningsItem from Models
 * @phpstan-import-type GetTOrgTokenWidgetMeResponseRefereeRewardOption1 from Models
 * @phpstan-import-type GetTOrgTokenWidgetMeResponse from Models
 * @phpstan-import-type GetTOrgTokenMobileResolveResponse from Models
 * @phpstan-import-type PostTOrgTokenMobileInstallResponse from Models
 * @phpstan-import-type GetWellKnownAppleAppSiteAssociationResponseApplinksDetailsItemComponentsItem from Models
 * @phpstan-import-type GetWellKnownAppleAppSiteAssociationResponseApplinksDetailsItem from Models
 * @phpstan-import-type GetWellKnownAppleAppSiteAssociationResponseApplinks from Models
 * @phpstan-import-type GetWellKnownAppleAppSiteAssociationResponse from Models
 * @phpstan-import-type GetWellKnownAssetlinksJsonResponseValueItemTarget from Models
 * @phpstan-import-type GetWellKnownAssetlinksJsonResponseValueItem from Models
 * @phpstan-import-type GetWellKnownAssetlinksJsonResponse from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseCheckers from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseSurfacesTrackingSnippetCookieDaysOption2 from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseSurfacesTrackingSnippetStorageItemPurpose from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseSurfacesTrackingSnippetStorageItem from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseSurfacesTrackingSnippet from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseSurfacesPortalEmbedStorageItemPurpose from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseSurfacesPortalEmbedStorageItem from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseSurfacesPortalEmbed from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseSurfaces from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponseChangesItem from Models
 * @phpstan-import-type GetWellKnownForgedeckEmbedJsonResponse from Models
 * @phpstan-import-type PostAgentsRegisterResponse from Models
 * @phpstan-import-type PostTOrgTokenAgentAttributeResponse from Models
 * @phpstan-import-type PostTOrgTokenAgentNegotiateResponse from Models
 * @phpstan-import-type PostTOrgTokenConsentResponse from Models
 * @phpstan-import-type GetVersionsResponseVersionsItem from Models
 * @phpstan-import-type GetVersionsResponse from Models
 * @phpstan-import-type GetAuthProvidersResponseDetailsItem from Models
 * @phpstan-import-type GetAuthProvidersResponse from Models
 * @phpstan-import-type PostAuthBackchannelLogoutResponse from Models
 * @phpstan-import-type PostAuthLogoutResponse from Models
 * @phpstan-import-type PostOrgsResponse from Models
 * @phpstan-import-type GetMeResponseUserOption1 from Models
 * @phpstan-import-type GetMeResponseMembershipsItem from Models
 * @phpstan-import-type GetMeResponseApiKey from Models
 * @phpstan-import-type GetMeResponseOrg from Models
 * @phpstan-import-type GetMeResponse from Models
 * @phpstan-import-type GetPortalAuthCurrentResponse from Models
 * @phpstan-import-type GetOrgPortalAuthResponseAdaptersItem from Models
 * @phpstan-import-type GetOrgPortalAuthResponse from Models
 * @phpstan-import-type PutOrgPortalAuthResponseAdaptersItem from Models
 * @phpstan-import-type PutOrgPortalAuthResponse from Models
 * @phpstan-import-type PostOrgPortalAuthTestResponse from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1Branding from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1ProgramsItem from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1ConsentTagsItem from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1ConsentSettingsLinkOption1 from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1ConsentBuiltin from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1Consent from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1ChatOption1TagsItem from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1ChatOption1 from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption1 from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption2 from Models
 * @phpstan-import-type GetHostsCurrentResponseValueOption3 from Models
 * @phpstan-import-type GetHostsCurrentResponse from Models
 * @phpstan-import-type GetChatlyIdentityResponseIdentityOption1 from Models
 * @phpstan-import-type GetChatlyIdentityResponse from Models
 * @phpstan-import-type PostMobilePurchasesResponse from Models
 * @phpstan-import-type PatchOrgResponse from Models
 * @phpstan-import-type GetOrgMembersResponse from Models
 * @phpstan-import-type PostOrgMembersResponse from Models
 * @phpstan-import-type PatchOrgMembersUserIdResponse from Models
 * @phpstan-import-type PutOrgPayoutScheduleResponse from Models
 * @phpstan-import-type GetOrgPayoutScheduleResponseProgramsItemOverrideOption1Option2 from Models
 * @phpstan-import-type GetOrgPayoutScheduleResponseProgramsItem from Models
 * @phpstan-import-type GetOrgPayoutScheduleResponse from Models
 * @phpstan-import-type PutProgramsIdPayoutScheduleResponseScheduleOption1Option2 from Models
 * @phpstan-import-type PutProgramsIdPayoutScheduleResponse from Models
 * @phpstan-import-type PutPartnersIdVatResponse from Models
 * @phpstan-import-type GetPartnerOrgsOrgIdSelfBillingResponse from Models
 * @phpstan-import-type PostPartnerOrgsOrgIdSelfBillingResponse from Models
 * @phpstan-import-type PutOrgTaxFilingResponse from Models
 * @phpstan-import-type GetTax1099FilingsResponseDataItemDocumentsItem from Models
 * @phpstan-import-type GetTax1099FilingsResponseDataItem from Models
 * @phpstan-import-type GetTax1099FilingsResponse from Models
 * @phpstan-import-type PostTax1099FilingsIdRefreshResponse from Models
 * @phpstan-import-type GetPartnerTaxDocumentsResponseDataItem from Models
 * @phpstan-import-type GetPartnerTaxDocumentsResponse from Models
 * @phpstan-import-type GetStatusResponseComponentsItem from Models
 * @phpstan-import-type GetStatusResponse from Models
 * @phpstan-import-type GetStatusIncidentsResponse from Models
 * @phpstan-import-type GetOrgReferralParamsResponse from Models
 * @phpstan-import-type GetProgramsResponse from Models
 * @phpstan-import-type GetProgramsIdEnrollmentsResponseDataItem from Models
 * @phpstan-import-type GetProgramsIdEnrollmentsResponse from Models
 * @phpstan-import-type PostProgramsIdEnrollmentsEnrollmentIdApproveResponse from Models
 * @phpstan-import-type PostProgramsIdEnrollmentsEnrollmentIdRejectResponse from Models
 * @phpstan-import-type GetPartnersResponse from Models
 * @phpstan-import-type GetPartnersIdResponse from Models
 * @phpstan-import-type GetPartnersIdEnrollmentsResponseDataItem from Models
 * @phpstan-import-type GetPartnersIdEnrollmentsResponse from Models
 * @phpstan-import-type GetProgramsIdGraphResponse from Models
 * @phpstan-import-type PostApiKeysResponseValueOption2 from Models
 * @phpstan-import-type PostApiKeysResponse from Models
 * @phpstan-import-type GetApiKeysResponse from Models
 * @phpstan-import-type PatchApiKeysIdResponse from Models
 * @phpstan-import-type DeleteApiKeysIdResponse from Models
 * @phpstan-import-type GetAuditLogsResponse from Models
 * @phpstan-import-type GetTestClockResponse from Models
 * @phpstan-import-type PostTestClockAdvanceResponse from Models
 * @phpstan-import-type GetTestEmailsResponseDataItem from Models
 * @phpstan-import-type GetTestEmailsResponse from Models
 * @phpstan-import-type PostCliDeviceCodesResponse from Models
 * @phpstan-import-type PostCliDeviceCodesTokenResponse from Models
 * @phpstan-import-type GetCliDeviceCodesUserCodeResponse from Models
 * @phpstan-import-type PostCliDeviceCodesUserCodeApproveResponse from Models
 * @phpstan-import-type PostCliListenersResponse from Models
 * @phpstan-import-type GetCliListenersIdEventsResponseEventsItem from Models
 * @phpstan-import-type GetCliListenersIdEventsResponse from Models
 * @phpstan-import-type PostCliTriggerResponseDeliveredTo from Models
 * @phpstan-import-type PostCliTriggerResponse from Models
 * @phpstan-import-type GetCliTopicsResponse from Models
 * @phpstan-import-type GetCliLogsResponseEntriesItem from Models
 * @phpstan-import-type GetCliLogsResponse from Models
 * @phpstan-import-type GetLinksResponse from Models
 * @phpstan-import-type PostCouponsResponse from Models
 * @phpstan-import-type GetCouponsResponse from Models
 * @phpstan-import-type PostWidgetTokensResponse from Models
 * @phpstan-import-type GetReferralsResponse from Models
 * @phpstan-import-type GetReferralsIdJourneyResponseTouchCreditsItem from Models
 * @phpstan-import-type GetReferralsIdJourneyResponseTouchpointsItem from Models
 * @phpstan-import-type GetReferralsIdJourneyResponse from Models
 * @phpstan-import-type PostAttributionReplayResponse from Models
 * @phpstan-import-type PostTrackEventsResponse from Models
 * @phpstan-import-type PostCommissionRulesResponse from Models
 * @phpstan-import-type GetCommissionRulesResponse from Models
 * @phpstan-import-type GetCommissionsResponse from Models
 * @phpstan-import-type GetPartnersIdBalancesResponse from Models
 * @phpstan-import-type PostCommissionsApproveDueResponse from Models
 * @phpstan-import-type PostCommissionsIdAdjustResponse from Models
 * @phpstan-import-type PutBillingConnectionsIdSecretResponse from Models
 * @phpstan-import-type PutBillingConnectionsIdCredentialsResponse from Models
 * @phpstan-import-type GetBillingConnectionsResponse from Models
 * @phpstan-import-type PutBillingConnectionsIdValueMappingResponse from Models
 * @phpstan-import-type PostBillingConnectionsIdRotateSecretResponse from Models
 * @phpstan-import-type GetBillingEventsResponse from Models
 * @phpstan-import-type PostBillingInternalCustomersResponse from Models
 * @phpstan-import-type PutPartnersIdPayoutProfileResponse from Models
 * @phpstan-import-type PatchPartnersIdPayoutProfileResponse from Models
 * @phpstan-import-type PostPayoutRunsIdExecuteResponse from Models
 * @phpstan-import-type PostPayoutRunsIdCancelResponse from Models
 * @phpstan-import-type GetPayoutRunsResponse from Models
 * @phpstan-import-type GetPayoutsResponse from Models
 * @phpstan-import-type GetTax1099ResponseDataItem from Models
 * @phpstan-import-type GetTax1099Response from Models
 * @phpstan-import-type GetFxRatesResponse from Models
 * @phpstan-import-type GetOrgFxFeedResponse from Models
 * @phpstan-import-type PutOrgFxFeedResponse from Models
 * @phpstan-import-type PostFxRatesSyncResponse from Models
 * @phpstan-import-type PostFxRatesClearOverrideResponse from Models
 * @phpstan-import-type GetPayoutConnectionsResponseDataItem from Models
 * @phpstan-import-type GetPayoutConnectionsResponse from Models
 * @phpstan-import-type PutPayoutConnectionsProviderResponse from Models
 * @phpstan-import-type DeletePayoutConnectionsProviderResponse from Models
 * @phpstan-import-type PostFraudInvalidTrafficScanResponsePartnersItem from Models
 * @phpstan-import-type PostFraudInvalidTrafficScanResponse from Models
 * @phpstan-import-type GetFraudCasesResponse from Models
 * @phpstan-import-type GetPartnersIdQualityResponseLiveMetrics from Models
 * @phpstan-import-type GetPartnersIdQualityResponseLive from Models
 * @phpstan-import-type GetPartnersIdQualityResponseLastSnapshotOption1 from Models
 * @phpstan-import-type GetPartnersIdQualityResponse from Models
 * @phpstan-import-type PostQualityRecomputeResponse from Models
 * @phpstan-import-type PostFraudDetectRingsResponse from Models
 * @phpstan-import-type GetReportsFilteredClicksResponseDataItem from Models
 * @phpstan-import-type GetReportsFilteredClicksResponse from Models
 * @phpstan-import-type GetAnalyticsOverviewResponseFunnel from Models
 * @phpstan-import-type GetAnalyticsOverviewResponse from Models
 * @phpstan-import-type GetAnalyticsTimeseriesResponseDataItem from Models
 * @phpstan-import-type GetAnalyticsTimeseriesResponse from Models
 * @phpstan-import-type GetAnalyticsCohortLtvResponseDataItem from Models
 * @phpstan-import-type GetAnalyticsCohortLtvResponse from Models
 * @phpstan-import-type GetAnalyticsByGeoResponseDataItem from Models
 * @phpstan-import-type GetAnalyticsByGeoResponse from Models
 * @phpstan-import-type GetAnalyticsByChannelResponseDataItem from Models
 * @phpstan-import-type GetAnalyticsByChannelResponse from Models
 * @phpstan-import-type GetAnalyticsCouponPerformanceResponseDataItem from Models
 * @phpstan-import-type GetAnalyticsCouponPerformanceResponse from Models
 * @phpstan-import-type GetReportsPartnerPerformanceResponseValueItem from Models
 * @phpstan-import-type GetReportsPartnerPerformanceResponse from Models
 * @phpstan-import-type GetProfitabilitySettingsResponse from Models
 * @phpstan-import-type GetProfitabilityProductsResponse from Models
 * @phpstan-import-type GetProfitabilityProductsProductRefResponse from Models
 * @phpstan-import-type PostProfitabilityRebuildResponse from Models
 * @phpstan-import-type GetProfitabilityRebuildJobIdResponse from Models
 * @phpstan-import-type GetRoiBreakdownResponseDataItemCoverage from Models
 * @phpstan-import-type GetRoiBreakdownResponseDataItemReferrals from Models
 * @phpstan-import-type GetRoiBreakdownResponseDataItem from Models
 * @phpstan-import-type GetRoiBreakdownResponse from Models
 * @phpstan-import-type GetRoiGrantsResponse from Models
 * @phpstan-import-type GetRoiPatternsResponsePatterns from Models
 * @phpstan-import-type GetRoiPatternsResponse from Models
 * @phpstan-import-type GetRoiPatternsPatternResponse from Models
 * @phpstan-import-type GetRoiDataQualityResponseGapsItemFix from Models
 * @phpstan-import-type GetRoiDataQualityResponseGapsItem from Models
 * @phpstan-import-type GetRoiDataQualityResponse from Models
 * @phpstan-import-type PostValueEventsResponseResultsItem from Models
 * @phpstan-import-type PostValueEventsResponseErrorsItem from Models
 * @phpstan-import-type PostValueEventsResponse from Models
 * @phpstan-import-type PostValueImportResponseValueOption1ErrorsItem from Models
 * @phpstan-import-type PostValueImportResponseValueOption1 from Models
 * @phpstan-import-type PostValueImportResponseValueOption2ErrorsItem from Models
 * @phpstan-import-type PostValueImportResponseValueOption2 from Models
 * @phpstan-import-type PostValueImportResponseValueOption3 from Models
 * @phpstan-import-type PostValueImportResponse from Models
 * @phpstan-import-type GetValueImportJobIdResponseErrorsItem from Models
 * @phpstan-import-type GetValueImportJobIdResponse from Models
 * @phpstan-import-type GetPartnerKycStatusResponse from Models
 * @phpstan-import-type PostPartnerKycSubmitResponse from Models
 * @phpstan-import-type GetPartnerMeResponseAccount from Models
 * @phpstan-import-type GetPartnerMeResponseMembershipsItemProgramsItem from Models
 * @phpstan-import-type GetPartnerMeResponseMembershipsItem from Models
 * @phpstan-import-type GetPartnerMeResponse from Models
 * @phpstan-import-type GetPartnerStatsResponseDataItem from Models
 * @phpstan-import-type GetPartnerStatsResponse from Models
 * @phpstan-import-type GetPartnerLinksResponseDataItem from Models
 * @phpstan-import-type GetPartnerLinksResponse from Models
 * @phpstan-import-type GetPartnerAssetsResponseDataItem from Models
 * @phpstan-import-type GetPartnerAssetsResponse from Models
 * @phpstan-import-type GetPartnerDisputesResponseDataItem from Models
 * @phpstan-import-type GetPartnerDisputesResponse from Models
 * @phpstan-import-type GetPartnerReferralsResponseDataItem from Models
 * @phpstan-import-type GetPartnerReferralsResponse from Models
 * @phpstan-import-type GetPartnerReferralsIdTransparencyResponse from Models
 * @phpstan-import-type GetPartnerPayoutsResponseDataItem from Models
 * @phpstan-import-type GetPartnerPayoutsResponse from Models
 * @phpstan-import-type PutPartnerOrgsOrgIdPayoutProfileResponse from Models
 * @phpstan-import-type GetPartnerProgramsProgramIdLeaderboardResponseContestOption1 from Models
 * @phpstan-import-type GetPartnerProgramsProgramIdLeaderboardResponseRowsItem from Models
 * @phpstan-import-type GetPartnerProgramsProgramIdLeaderboardResponse from Models
 * @phpstan-import-type PostPartnerProgramsProgramIdApplyResponse from Models
 * @phpstan-import-type PostWebhookEndpointsResponse from Models
 * @phpstan-import-type GetWebhookEndpointsResponse from Models
 * @phpstan-import-type PatchWebhookEndpointsIdResponse from Models
 * @phpstan-import-type PostWebhookEndpointsIdRotateSecretResponse from Models
 * @phpstan-import-type GetWebhookDeliveriesResponse from Models
 * @phpstan-import-type GetWebhookEndpointsIdDeliveriesResponse from Models
 * @phpstan-import-type GetWebhookDeliveriesIdResponse from Models
 * @phpstan-import-type PostWebhookEndpointsIdReplayResponse from Models
 * @phpstan-import-type PostSandboxSimulateResponse from Models
 * @phpstan-import-type PostImportProviderResponse from Models
 * @phpstan-import-type GetOpenapiJsonResponse from Models
 * @phpstan-import-type GetBrandingResponseWarningsItem from Models
 * @phpstan-import-type GetBrandingResponse from Models
 * @phpstan-import-type PostBrandingLinkDomainResponse from Models
 * @phpstan-import-type PostBrandingLinkDomainVerifyResponse from Models
 * @phpstan-import-type PostBrandingDomainResponse from Models
 * @phpstan-import-type PutBrandingResponseWarningsItem from Models
 * @phpstan-import-type PutBrandingResponse from Models
 * @phpstan-import-type PostEmbedTokensResponse from Models
 * @phpstan-import-type GetEmbedSummaryResponsePartner from Models
 * @phpstan-import-type GetEmbedSummaryResponseBalancesItem from Models
 * @phpstan-import-type GetEmbedSummaryResponseLinksItem from Models
 * @phpstan-import-type GetEmbedSummaryResponse from Models
 * @phpstan-import-type PostDiscoverySearchResponse from Models
 * @phpstan-import-type PostDiscoveryCorpusResponse from Models
 * @phpstan-import-type GetProspectsResponseDataItem from Models
 * @phpstan-import-type GetProspectsResponse from Models
 * @phpstan-import-type PostOutreachDraftResponse from Models
 * @phpstan-import-type GetOutreachResponseDataItem from Models
 * @phpstan-import-type GetOutreachResponse from Models
 * @phpstan-import-type PostOutreachSendDueResponse from Models
 * @phpstan-import-type PostUnsubscribeTokenResponse from Models
 * @phpstan-import-type GetAssistantSuggestionsResponseDataItem from Models
 * @phpstan-import-type GetAssistantSuggestionsResponse from Models
 * @phpstan-import-type GetMarketplaceListingResponseDataItemStats from Models
 * @phpstan-import-type GetMarketplaceListingResponseDataItem from Models
 * @phpstan-import-type GetMarketplaceListingResponse from Models
 * @phpstan-import-type GetPartnerMarketplaceResponseDataItemStats from Models
 * @phpstan-import-type GetPartnerMarketplaceResponseDataItem from Models
 * @phpstan-import-type GetPartnerMarketplaceResponse from Models
 * @phpstan-import-type GetPartnerProfileVerifiedResponse from Models
 * @phpstan-import-type PostPartnerDisputesResponse from Models
 * @phpstan-import-type GetDisputesResponseDataItem from Models
 * @phpstan-import-type GetDisputesResponse from Models
 * @phpstan-import-type GetCreatorsResponse from Models
 * @phpstan-import-type PostCreatorsAccountIdInviteResponse from Models
 * @phpstan-import-type GetInvitationsResponseDataItem from Models
 * @phpstan-import-type GetInvitationsResponse from Models
 * @phpstan-import-type GetPartnerInvitationsResponseDataItem from Models
 * @phpstan-import-type GetPartnerInvitationsResponse from Models
 * @phpstan-import-type GetBillingPlanResponseUsage from Models
 * @phpstan-import-type GetBillingPlanResponse from Models
 * @phpstan-import-type PostBillingCheckoutResponse from Models
 * @phpstan-import-type PostBillingPortalResponse from Models
 * @phpstan-import-type PostBillingActivateResponse from Models
 * @phpstan-import-type GetProgramsIdRefereeRewardResponse from Models
 * @phpstan-import-type PutProgramsIdRefereeRewardResponse from Models
 * @phpstan-import-type GetRewardsResponseDataItem from Models
 * @phpstan-import-type GetRewardsResponse from Models
 * @phpstan-import-type GetRewardsLookupCodeResponse from Models
 * @phpstan-import-type PostRewardsRedeemByCodeResponse from Models
 * @phpstan-import-type PostRewardsResponse from Models
 * @phpstan-import-type GetRewardsGrantedResponseValueItem from Models
 * @phpstan-import-type GetRewardsGrantedResponse from Models
 * @phpstan-import-type PutRewardsRulesKeyResponse from Models
 * @phpstan-import-type DeleteRewardsRulesKeyResponse from Models
 * @phpstan-import-type GetProgramsIdGroupsResponse from Models
 * @phpstan-import-type PutProgramsIdPartnersPartnerIdGroupResponse from Models
 * @phpstan-import-type GetProgramsIdPromotionsResponse from Models
 * @phpstan-import-type GetPartnerGroupsResponseDataItem from Models
 * @phpstan-import-type GetPartnerGroupsResponse from Models
 * @phpstan-import-type PostContractsResponse from Models
 * @phpstan-import-type GetContractsResponseDataItem from Models
 * @phpstan-import-type GetContractsResponse from Models
 * @phpstan-import-type GetPartnerContractsResponseDataItem from Models
 * @phpstan-import-type GetPartnerContractsResponse from Models
 * @phpstan-import-type PutProgramsIdIncrementalityResponse from Models
 * @phpstan-import-type GetIncrementalityResponseTreatment from Models
 * @phpstan-import-type GetIncrementalityResponseControl from Models
 * @phpstan-import-type GetIncrementalityResponseByPartnerItem from Models
 * @phpstan-import-type GetIncrementalityResponse from Models
 * @phpstan-import-type PutProgramsIdAutopricingResponse from Models
 * @phpstan-import-type GetProgramsIdAutopricingResponseAutopricingOption1 from Models
 * @phpstan-import-type GetProgramsIdAutopricingResponse from Models
 * @phpstan-import-type PostProgramsIdAutopriceRunResponseChangesItem from Models
 * @phpstan-import-type PostProgramsIdAutopriceRunResponseHeldItem from Models
 * @phpstan-import-type PostProgramsIdAutopriceRunResponse from Models
 * @phpstan-import-type GetPassportPublicKeyResponse from Models
 * @phpstan-import-type PostPassportVerifyResponse from Models
 * @phpstan-import-type GetPartnerAdvanceOfferResponse from Models
 * @phpstan-import-type PostPartnerAdvanceAcceptResponse from Models
 * @phpstan-import-type GetPartnerAdvanceResponseDataItem from Models
 * @phpstan-import-type GetPartnerAdvanceResponse from Models
 * @phpstan-import-type PutNetworkSettingsResponse from Models
 * @phpstan-import-type GetNetworkSettingsResponse from Models
 * @phpstan-import-type GetNetworkJourneyResponseTouchpointsItem from Models
 * @phpstan-import-type GetNetworkJourneyResponse from Models
 * @phpstan-import-type PutProgramsIdNegotiationPolicyResponse from Models
 * @phpstan-import-type GetProgramsIdNegotiationPolicyResponse from Models
 * @phpstan-import-type GetNegotiationsResponseDataItem from Models
 * @phpstan-import-type GetNegotiationsResponse from Models
 * @phpstan-import-type GetCleanroomConsentResponseConsentOption1 from Models
 * @phpstan-import-type GetCleanroomConsentResponse from Models
 * @phpstan-import-type GetCleanroomQueryResponseCohortsItem from Models
 * @phpstan-import-type GetCleanroomQueryResponse from Models
 * @phpstan-import-type GetAgentsResponseDataItem from Models
 * @phpstan-import-type GetAgentsResponse from Models
 * @phpstan-import-type GetAgentsRecommendationsResponseDataItem from Models
 * @phpstan-import-type GetAgentsRecommendationsResponse from Models
 * @phpstan-import-type GetAdminMetricsResponse from Models
 * @phpstan-import-type GetAdminOrgsResponseDataItem from Models
 * @phpstan-import-type GetAdminOrgsResponse from Models
 * @phpstan-import-type PostAdminOrgsIdSuspendResponse from Models
 * @phpstan-import-type PostAdminOrgsIdPlanResponse from Models
 * @phpstan-import-type PostAdminOrgsIdUnsuspendResponse from Models
 * @phpstan-import-type GetAdminPartnerAccountsResponseDataItem from Models
 * @phpstan-import-type GetAdminPartnerAccountsResponse from Models
 * @phpstan-import-type PostAdminPartnerAccountsIdBanResponse from Models
 * @phpstan-import-type PostAdminPartnerAccountsIdUnbanResponse from Models
 * @phpstan-import-type GetNotificationsResponse from Models
 * @phpstan-import-type GetPartnerNotificationsResponse from Models
 * @phpstan-import-type PostAssetsResponse from Models
 * @phpstan-import-type GetAssetsResponseDataItem from Models
 * @phpstan-import-type GetAssetsResponse from Models
 * @phpstan-import-type PostPartnerDealsResponse from Models
 * @phpstan-import-type GetPartnerDealsResponseDataItem from Models
 * @phpstan-import-type GetPartnerDealsResponse from Models
 * @phpstan-import-type GetDealsResponseDataItem from Models
 * @phpstan-import-type GetDealsResponse from Models
 * @phpstan-import-type PostDealsIdApproveResponse from Models
 * @phpstan-import-type PostDealsIdRejectResponse from Models
 * @phpstan-import-type PostDealsIdWonResponse from Models
 * @phpstan-import-type PostProgramsIdApplyLevelingResponse from Models
 * @phpstan-import-type PostPayoutRunsRunScheduledResponseValueItem from Models
 * @phpstan-import-type PostPayoutRunsRunScheduledResponse from Models
 * @phpstan-import-type PutPartnerOrgsOrgIdPostbackResponse from Models
 * @phpstan-import-type GetPartnerPostbackLogsResponseDataItem from Models
 * @phpstan-import-type GetPartnerPostbackLogsResponse from Models
 * @phpstan-import-type GetPartnerRecruitResponse from Models
 * @phpstan-import-type GetPartnerAchievementsResponseDataItem from Models
 * @phpstan-import-type GetPartnerAchievementsResponse from Models
 * @phpstan-import-type GetPartnerTermsResponseDataItem from Models
 * @phpstan-import-type GetPartnerTermsResponse from Models
 * @phpstan-import-type GetProgramsIdTermsAcceptancesResponseDataItem from Models
 * @phpstan-import-type GetProgramsIdTermsAcceptancesResponse from Models
 * @phpstan-import-type GetSetupStatusResponse from Models
 * @phpstan-import-type PostAnomaliesScanResponseValueItem from Models
 * @phpstan-import-type PostAnomaliesScanResponse from Models
 * @phpstan-import-type PostPrivacyForgetResponsePartnersItem from Models
 * @phpstan-import-type PostPrivacyForgetResponseCustomersItem from Models
 * @phpstan-import-type PostPrivacyForgetResponse from Models
 * @phpstan-import-type PostPrivacyLookupResponse from Models
 * @phpstan-import-type PostPrivacyRequestsResponse from Models
 * @phpstan-import-type GetPrivacyRequestsResponse from Models
 * @phpstan-import-type GetPrivacyRequestsIdResultResponseCustomersItemOption2 from Models
 * @phpstan-import-type GetPrivacyRequestsIdResultResponsePartnersItem from Models
 * @phpstan-import-type GetPrivacyRequestsIdResultResponse from Models
 * @phpstan-import-type PostEmailSettingsVerifyDomainResponse from Models
 * @phpstan-import-type GetEmailTemplatesResponse from Models
 * @phpstan-import-type PutEmailTemplatesEventLocaleResponse from Models
 * @phpstan-import-type DeleteEmailTemplatesEventLocaleResponse from Models
 * @phpstan-import-type PostEmailTestResponse from Models
 * @phpstan-import-type PutMeLocaleResponse from Models
 * @phpstan-import-type PutMeRoiDigestResponse from Models
 * @phpstan-import-type PutPartnerLocaleResponse from Models
 * @phpstan-import-type GetIntegrationsResponseZapier from Models
 * @phpstan-import-type GetIntegrationsResponse from Models
 * @phpstan-import-type PostIntegrationsHubspotTestResponse from Models
 * @phpstan-import-type PostIntegrationsSegmentTestResponse from Models
 * @phpstan-import-type GetIntegrationsDeliveriesResponse from Models
 * @phpstan-import-type GetZapierEventsResponseValueItem from Models
 * @phpstan-import-type GetZapierEventsResponse from Models
 * @phpstan-import-type GetZapierHooksResponse from Models
 * @phpstan-import-type GetZapierTriggersEventResponseValueItem from Models
 * @phpstan-import-type GetZapierTriggersEventResponse from Models
 * @phpstan-import-type PostZapierConversionsResponse from Models
 * @phpstan-import-type PostPartnerSecurityTotpSetupResponse from Models
 * @phpstan-import-type PostPartnerSecurityTotpEnableResponse from Models
 * @phpstan-import-type PostPartnerSecurityTotpDisableResponse from Models
 * @phpstan-import-type GetPartnerSecurityResponse from Models
 * @phpstan-import-type GetAuthConnectionsProvidersResponse from Models
 * @phpstan-import-type GetAuthConnectionsResponse from Models
 * @phpstan-import-type PutAuthConnectionsIdSecretResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdRotateSecretResponse from Models
 * @phpstan-import-type PatchAuthConnectionsIdResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdRevokePreviousSecretResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdSignupsResponseReferralOption1 from Models
 * @phpstan-import-type PostAuthConnectionsIdSignupsResponseReasoning from Models
 * @phpstan-import-type PostAuthConnectionsIdSignupsResponsePartner from Models
 * @phpstan-import-type PostAuthConnectionsIdSignupsResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdPartnersResponsePartner from Models
 * @phpstan-import-type PostAuthConnectionsIdPartnersResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdEraseResponseCustomerOption1 from Models
 * @phpstan-import-type PostAuthConnectionsIdEraseResponsePartnerOption1 from Models
 * @phpstan-import-type PostAuthConnectionsIdEraseResponse from Models
 * @phpstan-import-type GetAuthConnectionsIdExportResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdPingResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdAliasesResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdUsersResponseCustomerOption1 from Models
 * @phpstan-import-type PostAuthConnectionsIdUsersResponsePartnerOption1Option1 from Models
 * @phpstan-import-type PostAuthConnectionsIdUsersResponsePartnerOption1Option2 from Models
 * @phpstan-import-type PostAuthConnectionsIdUsersResponse from Models
 * @phpstan-import-type PostAuthConnectionsIdSignalsResponseReferralsItem from Models
 * @phpstan-import-type PostAuthConnectionsIdSignalsResponseReversedItem from Models
 * @phpstan-import-type PostAuthConnectionsIdSignalsResponsePartnerOption1 from Models
 * @phpstan-import-type PostAuthConnectionsIdSignalsResponse from Models
 * @phpstan-import-type PostAuthConnectionsInstallResponse from Models
 * @phpstan-import-type PostOauthTokenResponse from Models
 * @phpstan-import-type GetOrgSsoResponseProviderOption1 from Models
 * @phpstan-import-type GetOrgSsoResponseConnectionsItem from Models
 * @phpstan-import-type GetOrgSsoResponseTicketsItem from Models
 * @phpstan-import-type GetOrgSsoResponse from Models
 * @phpstan-import-type PostOrgSsoLinkResponse from Models
 * @phpstan-import-type PostOrgSsoTicketsResponse from Models
 * @phpstan-import-type PostOrgSsoTicketsIdRevokeResponse from Models
 * @phpstan-import-type GetOrgSsoConnectionsIdSamlMetadataResponse from Models
 * @phpstan-import-type PatchOrgSsoResponse from Models
 * @phpstan-import-type PutOrgSsoDirectResponse from Models
 * @phpstan-import-type DeleteOrgSsoDirectResponse from Models
 * @phpstan-import-type PostPartnerAuthWalletNonceResponse from Models
 * @phpstan-import-type PostPartnerAuthWalletVerifyResponse from Models
 * @phpstan-import-type PostOnchainConnectionsResponse from Models
 * @phpstan-import-type GetOnchainConnectionsResponseDataItem from Models
 * @phpstan-import-type GetOnchainConnectionsResponse from Models
 * @phpstan-import-type GetPublicProgramsHandleResponseBranding from Models
 * @phpstan-import-type GetPublicProgramsHandleResponse from Models
 * @phpstan-import-type PostPublicProgramsHandleJoinResponse from Models
 * @phpstan-import-type GetIntegrationHealthResponse from Models
 * @phpstan-import-type GetPlansResponsePlansItem from Models
 * @phpstan-import-type GetPlansResponse from Models
 * @phpstan-import-type GetEventsResponseEventsItem from Models
 * @phpstan-import-type GetEventsResponse from Models
 * @phpstan-import-type GetSupportContextResponsePartnerOption1 from Models
 * @phpstan-import-type GetSupportContextResponseCustomerOption1ReferredByOption1 from Models
 * @phpstan-import-type GetSupportContextResponseCustomerOption1RewardStateOption1 from Models
 * @phpstan-import-type GetSupportContextResponseCustomerOption1 from Models
 * @phpstan-import-type GetSupportContextResponseLinks from Models
 * @phpstan-import-type GetSupportContextResponse from Models
 * @phpstan-import-type GetSupportAppsResponseValueItemInstall from Models
 * @phpstan-import-type GetSupportAppsResponseValueItemConfigOption1 from Models
 * @phpstan-import-type GetSupportAppsResponseValueItem from Models
 * @phpstan-import-type GetSupportAppsResponse from Models
 * @phpstan-import-type PutSupportAppsAdapterResponse from Models
 * @phpstan-import-type DeleteSupportAppsAdapterResponse from Models
 * @phpstan-import-type PostSupportAppsAdapterTestResponse from Models
 * @phpstan-import-type PostSupportCardsOrgIdAdapterResponse from Models
 * @phpstan-import-type GetPrivacyExecutorsResponseValueItemInstall from Models
 * @phpstan-import-type GetPrivacyExecutorsResponseValueItemConfigOption1 from Models
 * @phpstan-import-type GetPrivacyExecutorsResponseValueItemHealth from Models
 * @phpstan-import-type GetPrivacyExecutorsResponseValueItem from Models
 * @phpstan-import-type GetPrivacyExecutorsResponse from Models
 * @phpstan-import-type PostPrivacyExecutorKeysResponse from Models
 * @phpstan-import-type DeletePrivacyExecutorsAdapterResponse from Models
 * @phpstan-import-type PostPrivacyExecutorsAdapterCheckResponse from Models
 * @phpstan-import-type GetPrivacyExecutorRequestsResponseValueItem from Models
 * @phpstan-import-type GetPrivacyExecutorRequestsResponse from Models
 * @phpstan-import-type PostAccountCloseResponse from Models
 * @phpstan-import-type GetClicksConsentCoverageResponse from Models
 * @phpstan-import-type GetClicksIdResponseConsentOption1 from Models
 * @phpstan-import-type GetClicksIdResponse from Models
 * @phpstan-import-type GetOrgTrackingConsentResponseAdaptersItem from Models
 * @phpstan-import-type GetOrgTrackingConsentResponse from Models
 * @phpstan-import-type GetOrgHostedPagesResponseConsent from Models
 * @phpstan-import-type GetOrgHostedPagesResponseChatOption1 from Models
 * @phpstan-import-type GetOrgHostedPagesResponseServedConsentTagsItem from Models
 * @phpstan-import-type GetOrgHostedPagesResponseServedConsentSettingsLinkOption1 from Models
 * @phpstan-import-type GetOrgHostedPagesResponseServedConsentBuiltin from Models
 * @phpstan-import-type GetOrgHostedPagesResponseServedConsent from Models
 * @phpstan-import-type GetOrgHostedPagesResponseServedChatOption1TagsItem from Models
 * @phpstan-import-type GetOrgHostedPagesResponseServedChatOption1 from Models
 * @phpstan-import-type GetOrgHostedPagesResponseServed from Models
 * @phpstan-import-type GetOrgHostedPagesResponseAdaptersConsentItem from Models
 * @phpstan-import-type GetOrgHostedPagesResponseAdaptersChatItem from Models
 * @phpstan-import-type GetOrgHostedPagesResponseAdapters from Models
 * @phpstan-import-type GetOrgHostedPagesResponse from Models
 * @phpstan-import-type PostOrgHostedPagesCheckResponseChecksItem from Models
 * @phpstan-import-type PostOrgHostedPagesCheckResponse from Models
 * @phpstan-import-type PostWebhooksBillingConnectionIdResponseResultsItem from Models
 * @phpstan-import-type PostWebhooksBillingConnectionIdResponse from Models
 * @phpstan-import-type PostWebhooksAuthConnectionIdResponseResultsItem from Models
 * @phpstan-import-type PostWebhooksAuthConnectionIdResponse from Models
 * @phpstan-import-type PostWebhooksSsoProviderResponse from Models
 * @phpstan-import-type PostWebhooksOnchainConnectionIdResponseResultsItem from Models
 * @phpstan-import-type PostWebhooksOnchainConnectionIdResponse from Models
 * @phpstan-import-type PostWebhooksPayoutsProviderResponse from Models
 * @phpstan-import-type PostWebhooksStripeBillingResponse from Models
 * @phpstan-import-type PostApiPrivacyLookupResponse from Models
 * @phpstan-import-type PostApiPrivacyRequestsResponse from Models
 * @phpstan-import-type GetApiPrivacyRequestsIdResponse from Models
 * @phpstan-import-type PostApiPrivacyOrgsOrgIdLookupResponse from Models
 * @phpstan-import-type PostApiPrivacyOrgsOrgIdRequestsResponse from Models
 * @phpstan-import-type GetApiPrivacyOrgsOrgIdRequestsIdResponse from Models
 * @phpstan-import-type GetGraphqlResponse from Models
 * @phpstan-import-type PostGraphqlResponse from Models
 * @phpstan-import-type PostAgentsRegisterBody from Models
 * @phpstan-import-type PostAuthBackchannelLogoutBody from Models
 * @phpstan-import-type PostOrgsBody from Models
 * @phpstan-import-type PutOrgPortalAuthBodyOption1 from Models
 * @phpstan-import-type PutOrgPortalAuthBodyOption2 from Models
 * @phpstan-import-type PutOrgPortalAuthBodyOption3 from Models
 * @phpstan-import-type PostMobilePurchasesBody from Models
 * @phpstan-import-type PatchOrgBody from Models
 * @phpstan-import-type PostOrgMembersBody from Models
 * @phpstan-import-type PatchOrgMembersUserIdBody from Models
 * @phpstan-import-type PutOrgPayoutScheduleBodyScheduleOption1Option1 from Models
 * @phpstan-import-type PutOrgPayoutScheduleBodyScheduleOption1Option2 from Models
 * @phpstan-import-type PutOrgPayoutScheduleBodyScheduleOption1Option3 from Models
 * @phpstan-import-type PutOrgPayoutScheduleBodyScheduleOption1Option4 from Models
 * @phpstan-import-type PutOrgPayoutScheduleBody from Models
 * @phpstan-import-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option1 from Models
 * @phpstan-import-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option2 from Models
 * @phpstan-import-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option3 from Models
 * @phpstan-import-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option1Option4 from Models
 * @phpstan-import-type PutProgramsIdPayoutScheduleBodyScheduleOption1Option2 from Models
 * @phpstan-import-type PutProgramsIdPayoutScheduleBody from Models
 * @phpstan-import-type PutOrgTaxProfileBody from Models
 * @phpstan-import-type PutPartnersIdVatBody from Models
 * @phpstan-import-type PostPartnerOrgsOrgIdSelfBillingBody from Models
 * @phpstan-import-type PutPartnerOrgsOrgIdVatBody from Models
 * @phpstan-import-type PutOrgTaxFilingBodyCredentials from Models
 * @phpstan-import-type PutOrgTaxFilingBody from Models
 * @phpstan-import-type PostTax1099FilingsBody from Models
 * @phpstan-import-type PostAdminStatusIncidentsBody from Models
 * @phpstan-import-type PatchAdminStatusIncidentsIdBody from Models
 * @phpstan-import-type PostAdminStatusIncidentsIdUpdatesBody from Models
 * @phpstan-import-type PutOrgRetentionBody from Models
 * @phpstan-import-type PutOrgReferralParamsBody from Models
 * @phpstan-import-type PostProgramsBodyPublicPage from Models
 * @phpstan-import-type PostProgramsBodyRiskPolicy from Models
 * @phpstan-import-type PostProgramsBodyWidget from Models
 * @phpstan-import-type PostProgramsBodyMobileAppOption1IosOption1 from Models
 * @phpstan-import-type PostProgramsBodyMobileAppOption1AndroidOption1 from Models
 * @phpstan-import-type PostProgramsBodyMobileAppOption1 from Models
 * @phpstan-import-type PostProgramsBody from Models
 * @phpstan-import-type PatchProgramsIdBodyPublicPage from Models
 * @phpstan-import-type PatchProgramsIdBodyRiskPolicy from Models
 * @phpstan-import-type PatchProgramsIdBodyWidget from Models
 * @phpstan-import-type PatchProgramsIdBodyMobileAppOption1IosOption1 from Models
 * @phpstan-import-type PatchProgramsIdBodyMobileAppOption1AndroidOption1 from Models
 * @phpstan-import-type PatchProgramsIdBodyMobileAppOption1 from Models
 * @phpstan-import-type PatchProgramsIdBody from Models
 * @phpstan-import-type PostProgramsIdEnrollmentsBody from Models
 * @phpstan-import-type PostPartnersBody from Models
 * @phpstan-import-type PatchPartnersIdBody from Models
 * @phpstan-import-type PostApiKeysBody from Models
 * @phpstan-import-type PatchApiKeysIdBody from Models
 * @phpstan-import-type PostTestClockAdvanceBody from Models
 * @phpstan-import-type PostCliDeviceCodesBody from Models
 * @phpstan-import-type PostCliDeviceCodesTokenBody from Models
 * @phpstan-import-type PostCliDeviceCodesUserCodeApproveBody from Models
 * @phpstan-import-type PostCliListenersBody from Models
 * @phpstan-import-type PostCliTriggerBody from Models
 * @phpstan-import-type PostLinksBody from Models
 * @phpstan-import-type PostCouponsBody from Models
 * @phpstan-import-type PostWidgetTokensBody from Models
 * @phpstan-import-type PostReferralsAssociateBodyConsent from Models
 * @phpstan-import-type PostReferralsAssociateBody from Models
 * @phpstan-import-type PatchReferralsIdBody from Models
 * @phpstan-import-type PostReferralsIdReassignBody from Models
 * @phpstan-import-type PostAttributionReplayBody from Models
 * @phpstan-import-type PostTrackEventsBodyOption1 from Models
 * @phpstan-import-type PostTrackEventsBodyOption2 from Models
 * @phpstan-import-type PostTrackEventsBodyOption3 from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigBaseOption1 from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigBaseOption2 from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigRecurringOption1 from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigRecurringOption2 from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigRecurringOption3 from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigConditionsMetadataItem from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigConditions from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigOverridesItemMatchMetadataItem from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigOverridesItemMatch from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigOverridesItemBaseOption1 from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigOverridesItemBaseOption2 from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigOverridesItem from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigTiersItem from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigBountiesItem from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigSubAffiliate from Models
 * @phpstan-import-type PostCommissionRulesBodyConfigNewVsExpansion from Models
 * @phpstan-import-type PostCommissionRulesBodyConfig from Models
 * @phpstan-import-type PostCommissionRulesBody from Models
 * @phpstan-import-type PostCommissionsIdAdjustBody from Models
 * @phpstan-import-type PostCommissionsIdSettleBody from Models
 * @phpstan-import-type PostBillingConnectionsBodyFilter from Models
 * @phpstan-import-type PostBillingConnectionsBody from Models
 * @phpstan-import-type PutBillingConnectionsIdSecretBody from Models
 * @phpstan-import-type PutBillingConnectionsIdCredentialsBody from Models
 * @phpstan-import-type PatchBillingConnectionsIdBodyFilterOption1 from Models
 * @phpstan-import-type PatchBillingConnectionsIdBody from Models
 * @phpstan-import-type PutBillingConnectionsIdValueMappingBody from Models
 * @phpstan-import-type PostBillingConnectionsIdValueMappingPreviewBodyMapping from Models
 * @phpstan-import-type PostBillingConnectionsIdValueMappingPreviewBody from Models
 * @phpstan-import-type PostBillingInternalCustomersBody from Models
 * @phpstan-import-type PutPartnersIdPayoutProfileBody from Models
 * @phpstan-import-type PatchPartnersIdPayoutProfileBody from Models
 * @phpstan-import-type PostPartnersIdTaxFormBody from Models
 * @phpstan-import-type PostFxRatesBody from Models
 * @phpstan-import-type PutOrgFxFeedBody from Models
 * @phpstan-import-type PostFxRatesClearOverrideBody from Models
 * @phpstan-import-type PutPayoutConnectionsProviderBodyOption1 from Models
 * @phpstan-import-type PutPayoutConnectionsProviderBodyOption2 from Models
 * @phpstan-import-type PutPayoutConnectionsProviderBodyOption3 from Models
 * @phpstan-import-type PutPayoutConnectionsProviderBodyOption4 from Models
 * @phpstan-import-type PutPayoutConnectionsProviderBodyOption5 from Models
 * @phpstan-import-type PutPayoutConnectionsProviderBodyOption6 from Models
 * @phpstan-import-type PostFraudInvalidTrafficScanBody from Models
 * @phpstan-import-type PostFraudCasesIdResolveBody from Models
 * @phpstan-import-type PutProfitabilitySettingsBody from Models
 * @phpstan-import-type PutProfitabilityProductsProductRefBody from Models
 * @phpstan-import-type PostRoiPatternsPatternReviewBody from Models
 * @phpstan-import-type PostValueEventsBodyEventsItem from Models
 * @phpstan-import-type PostValueEventsBody from Models
 * @phpstan-import-type PostValueImportBody from Models
 * @phpstan-import-type PostPartnerKycSubmitBody from Models
 * @phpstan-import-type PostPartnerLinksBody from Models
 * @phpstan-import-type PostPartnerDisputesBody from Models
 * @phpstan-import-type PutPartnerOrgsOrgIdPayoutProfileBody from Models
 * @phpstan-import-type PostPartnerOrgsOrgIdTaxFormBody from Models
 * @phpstan-import-type PostWebhookEndpointsBody from Models
 * @phpstan-import-type PatchWebhookEndpointsIdBody from Models
 * @phpstan-import-type PostSandboxSimulateBody from Models
 * @phpstan-import-type PostImportProviderBody from Models
 * @phpstan-import-type PutBrandingBody from Models
 * @phpstan-import-type PostBrandingLinkDomainBody from Models
 * @phpstan-import-type PostBrandingDomainBody from Models
 * @phpstan-import-type PostEmbedTokensBody from Models
 * @phpstan-import-type PostDiscoverySearchBody from Models
 * @phpstan-import-type PostDiscoveryCorpusBodyEntriesItem from Models
 * @phpstan-import-type PostDiscoveryCorpusBody from Models
 * @phpstan-import-type PostOutreachDraftBody from Models
 * @phpstan-import-type PutMarketplaceListingBody from Models
 * @phpstan-import-type PostDisputesIdResolveBody from Models
 * @phpstan-import-type PutPartnerProfileBodyChannelsItem from Models
 * @phpstan-import-type PutPartnerProfileBodyAudienceCountriesItem from Models
 * @phpstan-import-type PutPartnerProfileBodyAudience from Models
 * @phpstan-import-type PutPartnerProfileBody from Models
 * @phpstan-import-type PostCreatorsAccountIdInviteBody from Models
 * @phpstan-import-type PostBillingCheckoutBody from Models
 * @phpstan-import-type PostBillingActivateBody from Models
 * @phpstan-import-type PutProgramsIdRefereeRewardBody from Models
 * @phpstan-import-type PostRewardsBody from Models
 * @phpstan-import-type PostRewardsRedeemByCodeBody from Models
 * @phpstan-import-type PostRewardsIdRedeemBody from Models
 * @phpstan-import-type PutRewardsRulesKeyBody from Models
 * @phpstan-import-type PostProgramsIdGroupsBodyBaseOption1Option1 from Models
 * @phpstan-import-type PostProgramsIdGroupsBodyBaseOption1Option2 from Models
 * @phpstan-import-type PostProgramsIdGroupsBody from Models
 * @phpstan-import-type PatchPartnerGroupsIdBodyBaseOption1Option1 from Models
 * @phpstan-import-type PatchPartnerGroupsIdBodyBaseOption1Option2 from Models
 * @phpstan-import-type PatchPartnerGroupsIdBody from Models
 * @phpstan-import-type PutProgramsIdPartnersPartnerIdGroupBody from Models
 * @phpstan-import-type PostProgramsIdPromotionsBodyEffectOption1BaseOption1 from Models
 * @phpstan-import-type PostProgramsIdPromotionsBodyEffectOption1BaseOption2 from Models
 * @phpstan-import-type PostProgramsIdPromotionsBodyEffectOption1 from Models
 * @phpstan-import-type PostProgramsIdPromotionsBodyEffectOption2 from Models
 * @phpstan-import-type PostProgramsIdPromotionsBody from Models
 * @phpstan-import-type PostContractsBodyCompensationOption1 from Models
 * @phpstan-import-type PostContractsBodyCompensationOption2 from Models
 * @phpstan-import-type PostContractsBody from Models
 * @phpstan-import-type PutProgramsIdIncrementalityBody from Models
 * @phpstan-import-type PutProgramsIdAutopricingBody from Models
 * @phpstan-import-type PostProgramsIdAutopriceRunBody from Models
 * @phpstan-import-type PostPassportVerifyBody from Models
 * @phpstan-import-type PostPartnerAdvanceAcceptBody from Models
 * @phpstan-import-type PutNetworkSettingsBody from Models
 * @phpstan-import-type PutProgramsIdNegotiationPolicyBody from Models
 * @phpstan-import-type PostAdminOrgsIdSuspendBody from Models
 * @phpstan-import-type PostAdminOrgsIdPlanBody from Models
 * @phpstan-import-type PostAssetsBody from Models
 * @phpstan-import-type PostPartnerDealsBody from Models
 * @phpstan-import-type PostDealsIdApproveBody from Models
 * @phpstan-import-type PostDealsIdWonBody from Models
 * @phpstan-import-type PutPartnerOrgsOrgIdPostbackBody from Models
 * @phpstan-import-type PostPrivacyForgetBody from Models
 * @phpstan-import-type PostPrivacyLookupBody from Models
 * @phpstan-import-type PostPrivacyRequestsBodySubject from Models
 * @phpstan-import-type PostPrivacyRequestsBody from Models
 * @phpstan-import-type PutEmailSettingsBody from Models
 * @phpstan-import-type PutEmailTemplatesEventLocaleBody from Models
 * @phpstan-import-type PostEmailPreviewBodyDraft from Models
 * @phpstan-import-type PostEmailPreviewBody from Models
 * @phpstan-import-type PostEmailTestBody from Models
 * @phpstan-import-type PutMeLocaleBody from Models
 * @phpstan-import-type PutMeRoiDigestBody from Models
 * @phpstan-import-type PutPartnerLocaleBody from Models
 * @phpstan-import-type PutIntegrationsHubspotBody from Models
 * @phpstan-import-type PutIntegrationsSegmentBody from Models
 * @phpstan-import-type PostIntegrationsHubspotTestBody from Models
 * @phpstan-import-type PostZapierHooksBody from Models
 * @phpstan-import-type PostZapierConversionsBody from Models
 * @phpstan-import-type PostPartnerSecurityTotpEnableBody from Models
 * @phpstan-import-type PostPartnerSecurityTotpDisableBody from Models
 * @phpstan-import-type PostAuthConnectionsBodyKeys from Models
 * @phpstan-import-type PostAuthConnectionsBody from Models
 * @phpstan-import-type PutAuthConnectionsIdSecretBody from Models
 * @phpstan-import-type PatchAuthConnectionsIdBody from Models
 * @phpstan-import-type PostAuthConnectionsIdSignupsBodyReferral from Models
 * @phpstan-import-type PostAuthConnectionsIdSignupsBodyRisk from Models
 * @phpstan-import-type PostAuthConnectionsIdSignupsBody from Models
 * @phpstan-import-type PostAuthConnectionsIdPartnersBody from Models
 * @phpstan-import-type PostAuthConnectionsIdEraseBody from Models
 * @phpstan-import-type PostAuthConnectionsIdAliasesBody from Models
 * @phpstan-import-type PostAuthConnectionsIdUsersBody from Models
 * @phpstan-import-type PostAuthConnectionsIdSignalsBody from Models
 * @phpstan-import-type PostAuthConnectionsInstallBody from Models
 * @phpstan-import-type PostOauthTokenBody from Models
 * @phpstan-import-type PatchOrgSsoBody from Models
 * @phpstan-import-type PostOrgSsoTicketsBody from Models
 * @phpstan-import-type PutOrgSsoDirectBodyOption1 from Models
 * @phpstan-import-type PutOrgSsoDirectBodyOption2 from Models
 * @phpstan-import-type PostPartnerAuthWalletNonceBody from Models
 * @phpstan-import-type PostPartnerAuthWalletVerifyBody from Models
 * @phpstan-import-type PostOnchainConnectionsBody from Models
 * @phpstan-import-type PostPublicProgramsHandleJoinBody from Models
 * @phpstan-import-type PutSupportAppsAdapterBodyConfig from Models
 * @phpstan-import-type PutSupportAppsAdapterBody from Models
 * @phpstan-import-type PostSupportAppsAdapterTestBody from Models
 * @phpstan-import-type PostPrivacyExecutorKeysBodyConfig from Models
 * @phpstan-import-type PostPrivacyExecutorKeysBody from Models
 * @phpstan-import-type PostAccountCloseBody from Models
 * @phpstan-import-type PutOrgTrackingConsentBody from Models
 * @phpstan-import-type PutOrgHostedPagesBodyConsent from Models
 * @phpstan-import-type PutOrgHostedPagesBodyChatOption1 from Models
 * @phpstan-import-type PutOrgHostedPagesBody from Models
 * @phpstan-import-type PostGraphqlBody from Models
 */
trait Operations
{
    /** Every operation: id => [method, path, path params, query wire => php, body?, response kind, method, path php names, arity]. */
    public const OPERATIONS = [
        'deleteApiKeysId' => ['DELETE', '/v1/api-keys/{id}', ['id'], ['cascade' => 'cascade', 'pair' => 'pair'], false, 'json', 'deleteApiKeysId', ['id'], 4],
        'deleteAssetsId' => ['DELETE', '/v1/assets/{id}', ['id'], [], false, 'json', 'deleteAssetsId', ['id'], 2],
        'deleteAuthConnectionsId' => ['DELETE', '/v1/auth/connections/{id}', ['id'], [], false, 'json', 'deleteAuthConnectionsId', ['id'], 2],
        'deleteBillingConnectionsId' => ['DELETE', '/v1/billing/connections/{id}', ['id'], [], false, 'json', 'deleteBillingConnectionsId', ['id'], 2],
        'deleteBillingInternalCustomersCustomerRef' => ['DELETE', '/v1/billing/internal-customers/{customerRef}', ['customerRef'], [], false, 'json', 'deleteBillingInternalCustomersCustomerRef', ['customerRef'], 2],
        'deleteBrandingDomain' => ['DELETE', '/v1/branding/domain', [], [], false, 'json', 'deleteBrandingDomain', [], 1],
        'deleteBrandingLinkDomain' => ['DELETE', '/v1/branding/link-domain', [], [], false, 'json', 'deleteBrandingLinkDomain', [], 1],
        'deleteCliListenersId' => ['DELETE', '/v1/cli/listeners/{id}', ['id'], [], false, 'json', 'deleteCliListenersId', ['id'], 2],
        'deleteEmailTemplatesEventLocale' => ['DELETE', '/v1/email/templates/{event}/{locale}', ['event','locale'], [], false, 'json', 'deleteEmailTemplatesEventLocale', ['event','locale'], 3],
        'deleteIntegrationsKind' => ['DELETE', '/v1/integrations/{kind}', ['kind'], [], false, 'json', 'deleteIntegrationsKind', ['kind'], 2],
        'deleteOrgMembersUserId' => ['DELETE', '/v1/org/members/{userId}', ['userId'], [], false, 'json', 'deleteOrgMembersUserId', ['userId'], 2],
        'deleteOrgSsoDirect' => ['DELETE', '/v1/org/sso/direct', [], [], false, 'json', 'deleteOrgSsoDirect', [], 1],
        'deletePartnersId' => ['DELETE', '/v1/partners/{id}', ['id'], [], false, 'json', 'deletePartnersId', ['id'], 2],
        'deletePayoutConnectionsProvider' => ['DELETE', '/v1/payout-connections/{provider}', ['provider'], [], false, 'json', 'deletePayoutConnectionsProvider', ['provider'], 2],
        'deletePrivacyExecutorsAdapter' => ['DELETE', '/v1/privacy/executors/{adapter}', ['adapter'], [], false, 'json', 'deletePrivacyExecutorsAdapter', ['adapter'], 2],
        'deleteProfitabilityProductsProductRef' => ['DELETE', '/v1/profitability/products/{productRef}', ['productRef'], [], false, 'json', 'deleteProfitabilityProductsProductRef', ['productRef'], 2],
        'deleteRewardsRulesKey' => ['DELETE', '/v1/rewards/rules/{key}', ['key'], [], false, 'json', 'deleteRewardsRulesKey', ['key'], 2],
        'deleteSupportAppsAdapter' => ['DELETE', '/v1/support/apps/{adapter}', ['adapter'], [], false, 'json', 'deleteSupportAppsAdapter', ['adapter'], 2],
        'deleteWebhookEndpointsId' => ['DELETE', '/v1/webhook-endpoints/{id}', ['id'], [], false, 'json', 'deleteWebhookEndpointsId', ['id'], 2],
        'deleteZapierHooksId' => ['DELETE', '/v1/zapier/hooks/{id}', ['id'], [], false, 'json', 'deleteZapierHooksId', ['id'], 2],
        'getAdminMetrics' => ['GET', '/v1/admin/metrics', [], [], false, 'json', 'getAdminMetrics', [], 1],
        'getAdminOrgs' => ['GET', '/v1/admin/orgs', [], ['q' => 'q', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAdminOrgs', [], 7],
        'getAdminPartnerAccounts' => ['GET', '/v1/admin/partner-accounts', [], ['flagged' => 'flagged', 'q' => 'q', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAdminPartnerAccounts', [], 8],
        'getAgents' => ['GET', '/v1/agents', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAgents', [], 6],
        'getAgentsRecommendations' => ['GET', '/v1/agents/recommendations', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAgentsRecommendations', [], 6],
        'getAnalyticsByChannel' => ['GET', '/v1/analytics/by-channel', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAnalyticsByChannel', [], 6],
        'getAnalyticsByGeo' => ['GET', '/v1/analytics/by-geo', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAnalyticsByGeo', [], 6],
        'getAnalyticsCohortLtv' => ['GET', '/v1/analytics/cohort-ltv', [], ['months' => 'months', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAnalyticsCohortLtv', [], 7],
        'getAnalyticsCouponPerformance' => ['GET', '/v1/analytics/coupon-performance', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAnalyticsCouponPerformance', [], 6],
        'getAnalyticsOverview' => ['GET', '/v1/analytics/overview', [], ['programId' => 'programId', 'days' => 'days'], false, 'json', 'getAnalyticsOverview', [], 3],
        'getAnalyticsTimeseries' => ['GET', '/v1/analytics/timeseries', [], ['metric' => 'metric', 'days' => 'days', 'programId' => 'programId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAnalyticsTimeseries', [], 9],
        'getApiKeys' => ['GET', '/v1/api-keys', [], ['mode' => 'mode', 'owner' => 'owner', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getApiKeys', [], 8],
        'getApiKeysId' => ['GET', '/v1/api-keys/{id}', ['id'], [], false, 'json', 'getApiKeysId', ['id'], 2],
        'getAssets' => ['GET', '/v1/assets', [], ['programId' => 'programId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAssets', [], 7],
        'getAssistantSuggestions' => ['GET', '/v1/assistant/suggestions', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAssistantSuggestions', [], 6],
        'getAuditLogs' => ['GET', '/v1/audit-logs', [], ['actor' => 'actor', 'actorType' => 'actorType', 'action' => 'action', 'subjectType' => 'subjectType', 'subjectId' => 'subjectId', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore'], false, 'list', 'getAuditLogs', [], 11],
        'getAuthConnections' => ['GET', '/v1/auth/connections', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getAuthConnections', [], 6],
        'getAuthConnectionsIdExport' => ['GET', '/v1/auth/connections/{id}/export', ['id'], ['customerRef' => 'customerRef'], false, 'json', 'getAuthConnectionsIdExport', ['id'], 3],
        'getAuthConnectionsProviders' => ['GET', '/v1/auth/connections/providers', [], [], false, 'json', 'getAuthConnectionsProviders', [], 1],
        'getAuthProviders' => ['GET', '/v1/auth/providers', [], [], false, 'json', 'getAuthProviders', [], 1],
        'getBillingConnections' => ['GET', '/v1/billing/connections', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getBillingConnections', [], 6],
        'getBillingConnectionsId' => ['GET', '/v1/billing/connections/{id}', ['id'], [], false, 'json', 'getBillingConnectionsId', ['id'], 2],
        'getBillingEvents' => ['GET', '/v1/billing/events', [], ['customerRef' => 'customerRef', 'status' => 'status', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getBillingEvents', [], 8],
        'getBillingInternalCustomers' => ['GET', '/v1/billing/internal-customers', [], [], false, 'json', 'getBillingInternalCustomers', [], 1],
        'getBillingPlan' => ['GET', '/v1/billing/plan', [], [], false, 'json', 'getBillingPlan', [], 1],
        'getBranding' => ['GET', '/v1/branding', [], [], false, 'json', 'getBranding', [], 1],
        'getChatlyIdentity' => ['GET', '/v1/chatly/identity', [], [], false, 'json', 'getChatlyIdentity', [], 1],
        'getCleanroomConsent' => ['GET', '/v1/cleanroom/consent', [], ['customerRef' => 'customerRef'], false, 'json', 'getCleanroomConsent', [], 2],
        'getCleanroomQuery' => ['GET', '/v1/cleanroom/query', [], ['dimension' => 'dimension'], false, 'json', 'getCleanroomQuery', [], 2],
        'getClicksConsentCoverage' => ['GET', '/v1/clicks/consent-coverage', [], ['days' => 'days'], false, 'json', 'getClicksConsentCoverage', [], 2],
        'getClicksId' => ['GET', '/v1/clicks/{id}', ['id'], [], false, 'json', 'getClicksId', ['id'], 2],
        'getCliDeviceCodesUserCode' => ['GET', '/v1/cli/device-codes/{userCode}', ['userCode'], [], false, 'json', 'getCliDeviceCodesUserCode', ['userCode'], 2],
        'getCliListenersIdEvents' => ['GET', '/v1/cli/listeners/{id}/events', ['id'], ['wait' => 'wait'], false, 'json', 'getCliListenersIdEvents', ['id'], 3],
        'getCliLogs' => ['GET', '/v1/cli/logs', [], ['after' => 'after', 'wait' => 'wait', 'limit' => 'limit'], false, 'json', 'getCliLogs', [], 4],
        'getCliTopics' => ['GET', '/v1/cli/topics', [], [], false, 'json', 'getCliTopics', [], 1],
        'getCommissionRules' => ['GET', '/v1/commission-rules', [], ['programId' => 'programId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getCommissionRules', [], 7],
        'getCommissions' => ['GET', '/v1/commissions', [], ['partnerId' => 'partnerId', 'programId' => 'programId', 'type' => 'type', 'referralId' => 'referralId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getCommissions', [], 10],
        'getCommissionsId' => ['GET', '/v1/commissions/{id}', ['id'], [], false, 'json', 'getCommissionsId', ['id'], 2],
        'getContracts' => ['GET', '/v1/contracts', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getContracts', [], 6],
        'getCoupons' => ['GET', '/v1/coupons', [], ['programId' => 'programId', 'partnerId' => 'partnerId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getCoupons', [], 8],
        'getCreators' => ['GET', '/v1/creators', [], ['q' => 'q', 'category' => 'category', 'channel' => 'channel', 'minAudience' => 'minAudience', 'minEngagementBps' => 'minEngagementBps', 'audienceCountry' => 'audienceCountry', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getCreators', [], 12],
        'getCreatorsAccountId' => ['GET', '/v1/creators/{accountId}', ['accountId'], [], false, 'json', 'getCreatorsAccountId', ['accountId'], 2],
        'getDeals' => ['GET', '/v1/deals', [], ['status' => 'status', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getDeals', [], 7],
        'getDisputes' => ['GET', '/v1/disputes', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getDisputes', [], 6],
        'getEmailSettings' => ['GET', '/v1/email/settings', [], [], false, 'json', 'getEmailSettings', [], 1],
        'getEmailTemplates' => ['GET', '/v1/email/templates', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getEmailTemplates', [], 6],
        'getEmbed' => ['GET', '/v1/embed', [], ['token' => 'token'], false, 'json', 'getEmbed', [], 2],
        'getEmbedSummary' => ['GET', '/v1/embed/summary', [], [], false, 'json', 'getEmbedSummary', [], 1],
        'getEvents' => ['GET', '/v1/events', [], ['since' => 'since', 'topics' => 'topics', 'after' => 'after', 'limit' => 'limit'], false, 'json', 'getEvents', [], 5],
        'getExportAccounting' => ['GET', '/v1/export/accounting', [], ['format' => 'format', 'year' => 'year'], false, 'text', 'getExportAccounting', [], 3],
        'getExportFull' => ['GET', '/v1/export/full', [], [], false, 'text', 'getExportFull', [], 1],
        'getFraudCases' => ['GET', '/v1/fraud/cases', [], ['status' => 'status', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getFraudCases', [], 7],
        'getFxRates' => ['GET', '/v1/fx-rates', [], ['base' => 'base', 'quote' => 'quote', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getFxRates', [], 8],
        'getGraphql' => ['GET', '/v1/graphql', [], [], false, 'json', 'getGraphql', [], 1],
        'getHealth' => ['GET', '/v1/health', [], [], false, 'json', 'getHealth', [], 1],
        'getHostsCurrent' => ['GET', '/v1/hosts/current', [], [], false, 'json', 'getHostsCurrent', [], 1],
        'getHostsCurrentThemeCss' => ['GET', '/v1/hosts/current/theme.css', [], [], false, 'text', 'getHostsCurrentThemeCss', [], 1],
        'getIncrementality' => ['GET', '/v1/incrementality', [], ['programId' => 'programId'], false, 'json', 'getIncrementality', [], 2],
        'getIntegrationHealth' => ['GET', '/v1/integration-health', [], [], false, 'json', 'getIntegrationHealth', [], 1],
        'getIntegrations' => ['GET', '/v1/integrations', [], [], false, 'json', 'getIntegrations', [], 1],
        'getIntegrationsDeliveries' => ['GET', '/v1/integrations/deliveries', [], ['kind' => 'kind', 'status' => 'status', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getIntegrationsDeliveries', [], 8],
        'getInvitations' => ['GET', '/v1/invitations', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getInvitations', [], 6],
        'getLinks' => ['GET', '/v1/links', [], ['programId' => 'programId', 'partnerId' => 'partnerId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getLinks', [], 8],
        'getLinksIdQr' => ['GET', '/v1/links/{id}/qr', ['id'], [], false, 'text', 'getLinksIdQr', ['id'], 2],
        'getMarketplaceListing' => ['GET', '/v1/marketplace/listing', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getMarketplaceListing', [], 6],
        'getMe' => ['GET', '/v1/me', [], [], false, 'json', 'getMe', [], 1],
        'getNegotiations' => ['GET', '/v1/negotiations', [], ['programId' => 'programId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getNegotiations', [], 7],
        'getNetworkJourney' => ['GET', '/v1/network/journey', [], ['emailHash' => 'emailHash', 'model' => 'model'], false, 'json', 'getNetworkJourney', [], 3],
        'getNetworkSettings' => ['GET', '/v1/network/settings', [], [], false, 'json', 'getNetworkSettings', [], 1],
        'getNotifications' => ['GET', '/v1/notifications', [], ['unread' => 'unread', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getNotifications', [], 7],
        'getOnchainConnections' => ['GET', '/v1/onchain/connections', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getOnchainConnections', [], 6],
        'getOpenapiJson' => ['GET', '/v1/openapi.json', [], [], false, 'json', 'getOpenapiJson', [], 1],
        'getOpenapiYaml' => ['GET', '/v1/openapi.yaml', [], [], false, 'text', 'getOpenapiYaml', [], 1],
        'getOrg' => ['GET', '/v1/org', [], [], false, 'json', 'getOrg', [], 1],
        'getOrgFxFeed' => ['GET', '/v1/org/fx-feed', [], [], false, 'json', 'getOrgFxFeed', [], 1],
        'getOrgHostedPages' => ['GET', '/v1/org/hosted-pages', [], [], false, 'json', 'getOrgHostedPages', [], 1],
        'getOrgMembers' => ['GET', '/v1/org/members', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getOrgMembers', [], 6],
        'getOrgPayoutSchedule' => ['GET', '/v1/org/payout-schedule', [], [], false, 'json', 'getOrgPayoutSchedule', [], 1],
        'getOrgPortalAuth' => ['GET', '/v1/org/portal-auth', [], [], false, 'json', 'getOrgPortalAuth', [], 1],
        'getOrgReferralParams' => ['GET', '/v1/org/referral-params', [], [], false, 'json', 'getOrgReferralParams', [], 1],
        'getOrgRetention' => ['GET', '/v1/org/retention', [], [], false, 'json', 'getOrgRetention', [], 1],
        'getOrgSso' => ['GET', '/v1/org/sso', [], [], false, 'json', 'getOrgSso', [], 1],
        'getOrgSsoConnectionsIdSamlMetadata' => ['GET', '/v1/org/sso/connections/{id}/saml-metadata', ['id'], [], false, 'json', 'getOrgSsoConnectionsIdSamlMetadata', ['id'], 2],
        'getOrgTaxProfile' => ['GET', '/v1/org/tax-profile', [], [], false, 'json', 'getOrgTaxProfile', [], 1],
        'getOrgTrackingConsent' => ['GET', '/v1/org/tracking-consent', [], [], false, 'json', 'getOrgTrackingConsent', [], 1],
        'getOutreach' => ['GET', '/v1/outreach', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getOutreach', [], 6],
        'getPartnerAchievements' => ['GET', '/v1/partner/achievements', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerAchievements', [], 6],
        'getPartnerAdvance' => ['GET', '/v1/partner/advance', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerAdvance', [], 6],
        'getPartnerAdvanceOffer' => ['GET', '/v1/partner/advance/offer', [], [], false, 'json', 'getPartnerAdvanceOffer', [], 1],
        'getPartnerAssets' => ['GET', '/v1/partner/assets', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerAssets', [], 6],
        'getPartnerContracts' => ['GET', '/v1/partner/contracts', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerContracts', [], 6],
        'getPartnerDeals' => ['GET', '/v1/partner/deals', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerDeals', [], 6],
        'getPartnerDisputes' => ['GET', '/v1/partner/disputes', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerDisputes', [], 6],
        'getPartnerGroups' => ['GET', '/v1/partner/groups', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerGroups', [], 6],
        'getPartnerInvitations' => ['GET', '/v1/partner/invitations', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerInvitations', [], 6],
        'getPartnerKycStatus' => ['GET', '/v1/partner/kyc/status', [], [], false, 'json', 'getPartnerKycStatus', [], 1],
        'getPartnerLinks' => ['GET', '/v1/partner/links', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerLinks', [], 6],
        'getPartnerLinksIdQr' => ['GET', '/v1/partner/links/{id}/qr', ['id'], [], false, 'text', 'getPartnerLinksIdQr', ['id'], 2],
        'getPartnerMarketplace' => ['GET', '/v1/partner/marketplace', [], ['category' => 'category', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerMarketplace', [], 7],
        'getPartnerMe' => ['GET', '/v1/partner/me', [], [], false, 'json', 'getPartnerMe', [], 1],
        'getPartnerNotifications' => ['GET', '/v1/partner/notifications', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerNotifications', [], 6],
        'getPartnerOrgsOrgIdSelfBilling' => ['GET', '/v1/partner/orgs/{orgId}/self-billing', ['orgId'], [], false, 'json', 'getPartnerOrgsOrgIdSelfBilling', ['orgId'], 2],
        'getPartnerPassport' => ['GET', '/v1/partner/passport', [], [], false, 'json', 'getPartnerPassport', [], 1],
        'getPartnerPayouts' => ['GET', '/v1/partner/payouts', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerPayouts', [], 6],
        'getPartnerPayoutsIdInvoice' => ['GET', '/v1/partner/payouts/{id}/invoice', ['id'], ['format' => 'format'], false, 'json', 'getPartnerPayoutsIdInvoice', ['id'], 3],
        'getPartnerPostbackLogs' => ['GET', '/v1/partner/postback-logs', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerPostbackLogs', [], 6],
        'getPartnerProfile' => ['GET', '/v1/partner/profile', [], [], false, 'json', 'getPartnerProfile', [], 1],
        'getPartnerProfileVerified' => ['GET', '/v1/partner/profile/verified', [], [], false, 'json', 'getPartnerProfileVerified', [], 1],
        'getPartnerProgramsProgramIdLeaderboard' => ['GET', '/v1/partner/programs/{programId}/leaderboard', ['programId'], [], false, 'json', 'getPartnerProgramsProgramIdLeaderboard', ['programId'], 2],
        'getPartnerRecruit' => ['GET', '/v1/partner/recruit', [], [], false, 'json', 'getPartnerRecruit', [], 1],
        'getPartnerReferrals' => ['GET', '/v1/partner/referrals', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerReferrals', [], 6],
        'getPartnerReferralsIdTransparency' => ['GET', '/v1/partner/referrals/{id}/transparency', ['id'], [], false, 'json', 'getPartnerReferralsIdTransparency', ['id'], 2],
        'getPartners' => ['GET', '/v1/partners', [], ['email' => 'email', 'externalRef' => 'externalRef', 'status' => 'status', 'includeArchived' => 'includeArchived', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartners', [], 10],
        'getPartnerSecurity' => ['GET', '/v1/partner/security', [], [], false, 'json', 'getPartnerSecurity', [], 1],
        'getPartnersId' => ['GET', '/v1/partners/{id}', ['id'], [], false, 'json', 'getPartnersId', ['id'], 2],
        'getPartnersIdBalances' => ['GET', '/v1/partners/{id}/balances', ['id'], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnersIdBalances', ['id'], 7],
        'getPartnersIdEnrollments' => ['GET', '/v1/partners/{id}/enrollments', ['id'], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnersIdEnrollments', ['id'], 7],
        'getPartnersIdPayoutProfile' => ['GET', '/v1/partners/{id}/payout-profile', ['id'], [], false, 'json', 'getPartnersIdPayoutProfile', ['id'], 2],
        'getPartnersIdQuality' => ['GET', '/v1/partners/{id}/quality', ['id'], [], false, 'json', 'getPartnersIdQuality', ['id'], 2],
        'getPartnerStats' => ['GET', '/v1/partner/stats', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerStats', [], 6],
        'getPartnerTaxDocuments' => ['GET', '/v1/partner/tax-documents', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerTaxDocuments', [], 6],
        'getPartnerTaxDocumentsId' => ['GET', '/v1/partner/tax-documents/{id}', ['id'], [], false, 'text', 'getPartnerTaxDocumentsId', ['id'], 2],
        'getPartnerTerms' => ['GET', '/v1/partner/terms', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPartnerTerms', [], 6],
        'getPassportPublicKey' => ['GET', '/v1/passport/public-key', [], [], false, 'json', 'getPassportPublicKey', [], 1],
        'getPayoutConnections' => ['GET', '/v1/payout-connections', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPayoutConnections', [], 6],
        'getPayoutRuns' => ['GET', '/v1/payout-runs', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPayoutRuns', [], 6],
        'getPayouts' => ['GET', '/v1/payouts', [], ['partnerId' => 'partnerId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPayouts', [], 7],
        'getPayoutsIdInvoice' => ['GET', '/v1/payouts/{id}/invoice', ['id'], ['format' => 'format'], false, 'json', 'getPayoutsIdInvoice', ['id'], 3],
        'getPlans' => ['GET', '/v1/plans', [], [], false, 'json', 'getPlans', [], 1],
        'getPortalAuthCurrent' => ['GET', '/v1/portal-auth/current', [], ['org' => 'org'], false, 'json', 'getPortalAuthCurrent', [], 2],
        'getPrivacyExecutorRequests' => ['GET', '/v1/privacy/executor-requests', [], [], false, 'json', 'getPrivacyExecutorRequests', [], 1],
        'getPrivacyExecutors' => ['GET', '/v1/privacy/executors', [], [], false, 'json', 'getPrivacyExecutors', [], 1],
        'getPrivacyExport' => ['GET', '/v1/privacy/export', [], ['customerRef' => 'customerRef'], false, 'json', 'getPrivacyExport', [], 2],
        'getPrivacyRequests' => ['GET', '/v1/privacy/requests', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPrivacyRequests', [], 6],
        'getPrivacyRequestsId' => ['GET', '/v1/privacy/requests/{id}', ['id'], [], false, 'json', 'getPrivacyRequestsId', ['id'], 2],
        'getPrivacyRequestsIdResult' => ['GET', '/v1/privacy/requests/{id}/result', ['id'], [], false, 'json', 'getPrivacyRequestsIdResult', ['id'], 2],
        'getProfitabilityProducts' => ['GET', '/v1/profitability/products', [], [], false, 'json', 'getProfitabilityProducts', [], 1],
        'getProfitabilityProductsProductRef' => ['GET', '/v1/profitability/products/{productRef}', ['productRef'], [], false, 'json', 'getProfitabilityProductsProductRef', ['productRef'], 2],
        'getProfitabilityRebuildJobId' => ['GET', '/v1/profitability/rebuild/{jobId}', ['jobId'], [], false, 'json', 'getProfitabilityRebuildJobId', ['jobId'], 2],
        'getProfitabilitySettings' => ['GET', '/v1/profitability/settings', [], ['programId' => 'programId'], false, 'json', 'getProfitabilitySettings', [], 2],
        'getPrograms' => ['GET', '/v1/programs', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getPrograms', [], 6],
        'getProgramsId' => ['GET', '/v1/programs/{id}', ['id'], [], false, 'json', 'getProgramsId', ['id'], 2],
        'getProgramsIdAutopricing' => ['GET', '/v1/programs/{id}/autopricing', ['id'], [], false, 'json', 'getProgramsIdAutopricing', ['id'], 2],
        'getProgramsIdEnrollments' => ['GET', '/v1/programs/{id}/enrollments', ['id'], ['status' => 'status', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getProgramsIdEnrollments', ['id'], 8],
        'getProgramsIdGraph' => ['GET', '/v1/programs/{id}/graph', ['id'], ['root' => 'root', 'depth' => 'depth'], false, 'json', 'getProgramsIdGraph', ['id'], 4],
        'getProgramsIdGroups' => ['GET', '/v1/programs/{id}/groups', ['id'], ['includeArchived' => 'includeArchived', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getProgramsIdGroups', ['id'], 8],
        'getProgramsIdNegotiationPolicy' => ['GET', '/v1/programs/{id}/negotiation-policy', ['id'], [], false, 'json', 'getProgramsIdNegotiationPolicy', ['id'], 2],
        'getProgramsIdPromotions' => ['GET', '/v1/programs/{id}/promotions', ['id'], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getProgramsIdPromotions', ['id'], 7],
        'getProgramsIdRefereeReward' => ['GET', '/v1/programs/{id}/referee-reward', ['id'], [], false, 'json', 'getProgramsIdRefereeReward', ['id'], 2],
        'getProgramsIdTermsAcceptances' => ['GET', '/v1/programs/{id}/terms-acceptances', ['id'], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getProgramsIdTermsAcceptances', ['id'], 7],
        'getProspects' => ['GET', '/v1/prospects', [], ['status' => 'status', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getProspects', [], 7],
        'getPublicProgramsHandle' => ['GET', '/v1/public/programs/{handle}', ['handle'], [], false, 'json', 'getPublicProgramsHandle', ['handle'], 2],
        'getReferrals' => ['GET', '/v1/referrals', [], ['programId' => 'programId', 'partnerId' => 'partnerId', 'status' => 'status', 'customerRef' => 'customerRef', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getReferrals', [], 10],
        'getReferralsId' => ['GET', '/v1/referrals/{id}', ['id'], [], false, 'json', 'getReferralsId', ['id'], 2],
        'getReferralsIdJourney' => ['GET', '/v1/referrals/{id}/journey', ['id'], [], false, 'json', 'getReferralsIdJourney', ['id'], 2],
        'getReportsFilteredClicks' => ['GET', '/v1/reports/filtered-clicks', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getReportsFilteredClicks', [], 6],
        'getReportsPartnerPerformance' => ['GET', '/v1/reports/partner-performance', [], ['format' => 'format'], false, 'json', 'getReportsPartnerPerformance', [], 2],
        'getRewards' => ['GET', '/v1/rewards', [], ['status' => 'status', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getRewards', [], 7],
        'getRewardsGranted' => ['GET', '/v1/rewards/granted', [], [], false, 'json', 'getRewardsGranted', [], 1],
        'getRewardsLookupCode' => ['GET', '/v1/rewards/lookup/{code}', ['code'], [], false, 'json', 'getRewardsLookupCode', ['code'], 2],
        'getRewardsRules' => ['GET', '/v1/rewards/rules', [], [], false, 'json', 'getRewardsRules', [], 1],
        'getRoiBreakdown' => ['GET', '/v1/roi/breakdown', [], ['from' => 'from', 'to' => 'to', 'programId' => 'programId', 'partnerId' => 'partnerId', 'windowDays' => 'windowDays', 'currency' => 'currency', 'format' => 'format', 'by' => 'by', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getRoiBreakdown', [], 14],
        'getRoiDataQuality' => ['GET', '/v1/roi/data-quality', [], ['from' => 'from', 'to' => 'to', 'format' => 'format'], false, 'json', 'getRoiDataQuality', [], 4],
        'getRoiGrants' => ['GET', '/v1/roi/grants', [], ['from' => 'from', 'to' => 'to', 'programId' => 'programId', 'partnerId' => 'partnerId', 'windowDays' => 'windowDays', 'currency' => 'currency', 'format' => 'format', 'status' => 'status', 'role' => 'role', 'paidBack' => 'paidBack', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getRoiGrants', [], 16],
        'getRoiPartnersIdTrace' => ['GET', '/v1/roi/partners/{id}/trace', ['id'], ['windowDays' => 'windowDays', 'format' => 'format'], false, 'json', 'getRoiPartnersIdTrace', ['id'], 4],
        'getRoiPatterns' => ['GET', '/v1/roi/patterns', [], [], false, 'json', 'getRoiPatterns', [], 1],
        'getRoiPatternsPattern' => ['GET', '/v1/roi/patterns/{pattern}', ['pattern'], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getRoiPatternsPattern', ['pattern'], 7],
        'getRoiSummary' => ['GET', '/v1/roi/summary', [], ['from' => 'from', 'to' => 'to', 'programId' => 'programId', 'partnerId' => 'partnerId', 'windowDays' => 'windowDays', 'currency' => 'currency', 'format' => 'format', 'model' => 'model', 'includeProjection' => 'includeProjection'], false, 'json', 'getRoiSummary', [], 10],
        'getRoiTraceCustomerRef' => ['GET', '/v1/roi/trace/{customerRef}', ['customerRef'], ['windowDays' => 'windowDays', 'format' => 'format'], false, 'json', 'getRoiTraceCustomerRef', ['customerRef'], 4],
        'getSetupStatus' => ['GET', '/v1/setup/status', [], [], false, 'json', 'getSetupStatus', [], 1],
        'getStatus' => ['GET', '/v1/status', [], [], false, 'json', 'getStatus', [], 1],
        'getStatusIncidents' => ['GET', '/v1/status/incidents', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getStatusIncidents', [], 6],
        'getStatusIncidentsAtom' => ['GET', '/v1/status/incidents.atom', [], [], false, 'text', 'getStatusIncidentsAtom', [], 1],
        'getStatusIncidentsId' => ['GET', '/v1/status/incidents/{id}', ['id'], [], false, 'json', 'getStatusIncidentsId', ['id'], 2],
        'getSupportApps' => ['GET', '/v1/support/apps', [], [], false, 'json', 'getSupportApps', [], 1],
        'getSupportCardsOrgIdAdapter' => ['GET', '/v1/support/cards/{orgId}/{adapter}', ['orgId','adapter'], ['email' => 'email', 'externalId' => 'externalId'], false, 'json', 'getSupportCardsOrgIdAdapter', ['orgId','adapter'], 5],
        'getSupportContext' => ['GET', '/v1/support/context', [], ['email' => 'email', 'customerRef' => 'customerRef', 'partnerExternalRef' => 'partnerExternalRef', 'ext' => 'ext'], false, 'json', 'getSupportContext', [], 5],
        'getTax1099' => ['GET', '/v1/tax/1099', [], ['year' => 'year', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getTax1099', [], 7],
        'getTax1099Filings' => ['GET', '/v1/tax/1099/filings', [], ['year' => 'year', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getTax1099Filings', [], 7],
        'getTax1099Preview' => ['GET', '/v1/tax/1099/preview', [], ['year' => 'year'], false, 'json', 'getTax1099Preview', [], 2],
        'getTestClock' => ['GET', '/v1/test_clock', [], [], false, 'json', 'getTestClock', [], 1],
        'getTestEmails' => ['GET', '/v1/test/emails', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getTestEmails', [], 6],
        'getValueImportJobId' => ['GET', '/v1/value/import/{jobId}', ['jobId'], [], false, 'json', 'getValueImportJobId', ['jobId'], 2],
        'getVersions' => ['GET', '/v1/versions', [], [], false, 'json', 'getVersions', [], 1],
        'getWebhookDeliveries' => ['GET', '/v1/webhook-deliveries', [], ['endpointId' => 'endpointId', 'limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getWebhookDeliveries', [], 7],
        'getWebhookDeliveriesId' => ['GET', '/v1/webhook-deliveries/{id}', ['id'], [], false, 'json', 'getWebhookDeliveriesId', ['id'], 2],
        'getWebhookEndpoints' => ['GET', '/v1/webhook-endpoints', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getWebhookEndpoints', [], 6],
        'getWebhookEndpointsId' => ['GET', '/v1/webhook-endpoints/{id}', ['id'], [], false, 'json', 'getWebhookEndpointsId', ['id'], 2],
        'getWebhookEndpointsIdDeliveries' => ['GET', '/v1/webhook-endpoints/{id}/deliveries', ['id'], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getWebhookEndpointsIdDeliveries', ['id'], 7],
        'getZapierEvents' => ['GET', '/v1/zapier/events', [], [], false, 'json', 'getZapierEvents', [], 1],
        'getZapierHooks' => ['GET', '/v1/zapier/hooks', [], ['limit' => 'limit', 'starting_after' => 'startingAfter', 'ending_before' => 'endingBefore', 'created[gte]' => 'createdGte', 'created[lte]' => 'createdLte'], false, 'list', 'getZapierHooks', [], 6],
        'getZapierTriggersEvent' => ['GET', '/v1/zapier/triggers/{event}', ['event'], ['limit' => 'limit'], false, 'json', 'getZapierTriggersEvent', ['event'], 3],
        'patchAdminStatusIncidentsId' => ['PATCH', '/v1/admin/status/incidents/{id}', ['id'], [], true, 'json', 'patchAdminStatusIncidentsId', ['id'], 3],
        'patchApiKeysId' => ['PATCH', '/v1/api-keys/{id}', ['id'], [], true, 'json', 'patchApiKeysId', ['id'], 3],
        'patchAuthConnectionsId' => ['PATCH', '/v1/auth/connections/{id}', ['id'], [], true, 'json', 'patchAuthConnectionsId', ['id'], 3],
        'patchBillingConnectionsId' => ['PATCH', '/v1/billing/connections/{id}', ['id'], [], true, 'json', 'patchBillingConnectionsId', ['id'], 3],
        'patchOrg' => ['PATCH', '/v1/org', [], [], true, 'json', 'patchOrg', [], 2],
        'patchOrgMembersUserId' => ['PATCH', '/v1/org/members/{userId}', ['userId'], [], true, 'json', 'patchOrgMembersUserId', ['userId'], 3],
        'patchOrgSso' => ['PATCH', '/v1/org/sso', [], [], true, 'json', 'patchOrgSso', [], 2],
        'patchPartnerGroupsId' => ['PATCH', '/v1/partner-groups/{id}', ['id'], [], true, 'json', 'patchPartnerGroupsId', ['id'], 3],
        'patchPartnersId' => ['PATCH', '/v1/partners/{id}', ['id'], [], true, 'json', 'patchPartnersId', ['id'], 3],
        'patchPartnersIdPayoutProfile' => ['PATCH', '/v1/partners/{id}/payout-profile', ['id'], [], true, 'json', 'patchPartnersIdPayoutProfile', ['id'], 3],
        'patchProgramsId' => ['PATCH', '/v1/programs/{id}', ['id'], [], true, 'json', 'patchProgramsId', ['id'], 3],
        'patchReferralsId' => ['PATCH', '/v1/referrals/{id}', ['id'], [], true, 'json', 'patchReferralsId', ['id'], 3],
        'patchWebhookEndpointsId' => ['PATCH', '/v1/webhook-endpoints/{id}', ['id'], [], true, 'json', 'patchWebhookEndpointsId', ['id'], 3],
        'postAccountClose' => ['POST', '/v1/account/close', [], [], true, 'json', 'postAccountClose', [], 2],
        'postAdminOrgsIdPlan' => ['POST', '/v1/admin/orgs/{id}/plan', ['id'], [], true, 'json', 'postAdminOrgsIdPlan', ['id'], 3],
        'postAdminOrgsIdSuspend' => ['POST', '/v1/admin/orgs/{id}/suspend', ['id'], [], true, 'json', 'postAdminOrgsIdSuspend', ['id'], 3],
        'postAdminOrgsIdUnsuspend' => ['POST', '/v1/admin/orgs/{id}/unsuspend', ['id'], [], false, 'json', 'postAdminOrgsIdUnsuspend', ['id'], 2],
        'postAdminPartnerAccountsIdBan' => ['POST', '/v1/admin/partner-accounts/{id}/ban', ['id'], [], false, 'json', 'postAdminPartnerAccountsIdBan', ['id'], 2],
        'postAdminPartnerAccountsIdUnban' => ['POST', '/v1/admin/partner-accounts/{id}/unban', ['id'], [], false, 'json', 'postAdminPartnerAccountsIdUnban', ['id'], 2],
        'postAdminStatusIncidents' => ['POST', '/v1/admin/status/incidents', [], [], true, 'json', 'postAdminStatusIncidents', [], 2],
        'postAdminStatusIncidentsIdUpdates' => ['POST', '/v1/admin/status/incidents/{id}/updates', ['id'], [], true, 'json', 'postAdminStatusIncidentsIdUpdates', ['id'], 3],
        'postAgentsRegister' => ['POST', '/v1/agents/register', [], [], true, 'json', 'postAgentsRegister', [], 2],
        'postAnomaliesScan' => ['POST', '/v1/anomalies/scan', [], [], false, 'json', 'postAnomaliesScan', [], 1],
        'postApiKeys' => ['POST', '/v1/api-keys', [], [], true, 'json', 'postApiKeys', [], 2],
        'postAssets' => ['POST', '/v1/assets', [], [], true, 'json', 'postAssets', [], 2],
        'postAttributionReplay' => ['POST', '/v1/attribution/replay', [], [], true, 'json', 'postAttributionReplay', [], 2],
        'postAuthBackchannelLogout' => ['POST', '/v1/auth/backchannel-logout', [], [], true, 'json', 'postAuthBackchannelLogout', [], 2],
        'postAuthConnections' => ['POST', '/v1/auth/connections', [], [], true, 'json', 'postAuthConnections', [], 2],
        'postAuthConnectionsIdAliases' => ['POST', '/v1/auth/connections/{id}/aliases', ['id'], [], true, 'json', 'postAuthConnectionsIdAliases', ['id'], 3],
        'postAuthConnectionsIdErase' => ['POST', '/v1/auth/connections/{id}/erase', ['id'], [], true, 'json', 'postAuthConnectionsIdErase', ['id'], 3],
        'postAuthConnectionsIdPartners' => ['POST', '/v1/auth/connections/{id}/partners', ['id'], [], true, 'json', 'postAuthConnectionsIdPartners', ['id'], 3],
        'postAuthConnectionsIdPing' => ['POST', '/v1/auth/connections/{id}/ping', ['id'], [], true, 'json', 'postAuthConnectionsIdPing', ['id'], 3],
        'postAuthConnectionsIdRevokePreviousSecret' => ['POST', '/v1/auth/connections/{id}/revoke-previous-secret', ['id'], [], false, 'json', 'postAuthConnectionsIdRevokePreviousSecret', ['id'], 2],
        'postAuthConnectionsIdRotateSecret' => ['POST', '/v1/auth/connections/{id}/rotate-secret', ['id'], [], false, 'json', 'postAuthConnectionsIdRotateSecret', ['id'], 2],
        'postAuthConnectionsIdSignals' => ['POST', '/v1/auth/connections/{id}/signals', ['id'], [], true, 'json', 'postAuthConnectionsIdSignals', ['id'], 3],
        'postAuthConnectionsIdSignups' => ['POST', '/v1/auth/connections/{id}/signups', ['id'], [], true, 'json', 'postAuthConnectionsIdSignups', ['id'], 3],
        'postAuthConnectionsIdUsers' => ['POST', '/v1/auth/connections/{id}/users', ['id'], [], true, 'json', 'postAuthConnectionsIdUsers', ['id'], 3],
        'postAuthConnectionsInstall' => ['POST', '/v1/auth/connections/install', [], [], true, 'json', 'postAuthConnectionsInstall', [], 2],
        'postAuthLogout' => ['POST', '/v1/auth/logout', [], [], false, 'json', 'postAuthLogout', [], 1],
        'postBillingActivate' => ['POST', '/v1/billing/activate', [], [], true, 'json', 'postBillingActivate', [], 2],
        'postBillingCheckout' => ['POST', '/v1/billing/checkout', [], [], true, 'json', 'postBillingCheckout', [], 2],
        'postBillingConnections' => ['POST', '/v1/billing/connections', [], [], true, 'json', 'postBillingConnections', [], 2],
        'postBillingConnectionsIdRotateSecret' => ['POST', '/v1/billing/connections/{id}/rotate-secret', ['id'], [], false, 'json', 'postBillingConnectionsIdRotateSecret', ['id'], 2],
        'postBillingConnectionsIdValueMappingPreview' => ['POST', '/v1/billing/connections/{id}/value-mapping/preview', ['id'], [], true, 'json', 'postBillingConnectionsIdValueMappingPreview', ['id'], 3],
        'postBillingInternalCustomers' => ['POST', '/v1/billing/internal-customers', [], [], true, 'json', 'postBillingInternalCustomers', [], 2],
        'postBillingPortal' => ['POST', '/v1/billing/portal', [], [], false, 'json', 'postBillingPortal', [], 1],
        'postBrandingDomain' => ['POST', '/v1/branding/domain', [], [], true, 'json', 'postBrandingDomain', [], 2],
        'postBrandingDomainVerify' => ['POST', '/v1/branding/domain/verify', [], [], false, 'json', 'postBrandingDomainVerify', [], 1],
        'postBrandingLinkDomain' => ['POST', '/v1/branding/link-domain', [], [], true, 'json', 'postBrandingLinkDomain', [], 2],
        'postBrandingLinkDomainVerify' => ['POST', '/v1/branding/link-domain/verify', [], [], false, 'json', 'postBrandingLinkDomainVerify', [], 1],
        'postCliDeviceCodes' => ['POST', '/v1/cli/device-codes', [], [], true, 'json', 'postCliDeviceCodes', [], 2],
        'postCliDeviceCodesToken' => ['POST', '/v1/cli/device-codes/token', [], [], true, 'json', 'postCliDeviceCodesToken', [], 2],
        'postCliDeviceCodesUserCodeApprove' => ['POST', '/v1/cli/device-codes/{userCode}/approve', ['userCode'], [], true, 'json', 'postCliDeviceCodesUserCodeApprove', ['userCode'], 3],
        'postCliDeviceCodesUserCodeDeny' => ['POST', '/v1/cli/device-codes/{userCode}/deny', ['userCode'], [], false, 'json', 'postCliDeviceCodesUserCodeDeny', ['userCode'], 2],
        'postCliListeners' => ['POST', '/v1/cli/listeners', [], [], true, 'json', 'postCliListeners', [], 2],
        'postCliTrigger' => ['POST', '/v1/cli/trigger', [], [], true, 'json', 'postCliTrigger', [], 2],
        'postCommissionRules' => ['POST', '/v1/commission-rules', [], [], true, 'json', 'postCommissionRules', [], 2],
        'postCommissionsApproveDue' => ['POST', '/v1/commissions/approve-due', [], [], false, 'json', 'postCommissionsApproveDue', [], 1],
        'postCommissionsIdAdjust' => ['POST', '/v1/commissions/{id}/adjust', ['id'], [], true, 'json', 'postCommissionsIdAdjust', ['id'], 3],
        'postCommissionsIdSettle' => ['POST', '/v1/commissions/{id}/settle', ['id'], [], true, 'json', 'postCommissionsIdSettle', ['id'], 3],
        'postContracts' => ['POST', '/v1/contracts', [], [], true, 'json', 'postContracts', [], 2],
        'postContractsIdSend' => ['POST', '/v1/contracts/{id}/send', ['id'], [], false, 'json', 'postContractsIdSend', ['id'], 2],
        'postCoupons' => ['POST', '/v1/coupons', [], [], true, 'json', 'postCoupons', [], 2],
        'postCreatorsAccountIdInvite' => ['POST', '/v1/creators/{accountId}/invite', ['accountId'], [], true, 'json', 'postCreatorsAccountIdInvite', ['accountId'], 3],
        'postDealsIdApprove' => ['POST', '/v1/deals/{id}/approve', ['id'], [], true, 'json', 'postDealsIdApprove', ['id'], 3],
        'postDealsIdReject' => ['POST', '/v1/deals/{id}/reject', ['id'], [], false, 'json', 'postDealsIdReject', ['id'], 2],
        'postDealsIdWon' => ['POST', '/v1/deals/{id}/won', ['id'], [], true, 'json', 'postDealsIdWon', ['id'], 3],
        'postDiscoveryCorpus' => ['POST', '/v1/discovery/corpus', [], [], true, 'json', 'postDiscoveryCorpus', [], 2],
        'postDiscoverySearch' => ['POST', '/v1/discovery/search', [], [], true, 'json', 'postDiscoverySearch', [], 2],
        'postDisputesIdResolve' => ['POST', '/v1/disputes/{id}/resolve', ['id'], [], true, 'json', 'postDisputesIdResolve', ['id'], 3],
        'postEmailPreview' => ['POST', '/v1/email/preview', [], [], true, 'json', 'postEmailPreview', [], 2],
        'postEmailSettingsVerifyDomain' => ['POST', '/v1/email/settings/verify-domain', [], [], false, 'json', 'postEmailSettingsVerifyDomain', [], 1],
        'postEmailTest' => ['POST', '/v1/email/test', [], [], true, 'json', 'postEmailTest', [], 2],
        'postEmbedTokens' => ['POST', '/v1/embed/tokens', [], [], true, 'json', 'postEmbedTokens', [], 2],
        'postFraudCasesIdResolve' => ['POST', '/v1/fraud/cases/{id}/resolve', ['id'], [], true, 'json', 'postFraudCasesIdResolve', ['id'], 3],
        'postFraudDetectRings' => ['POST', '/v1/fraud/detect-rings', [], [], false, 'json', 'postFraudDetectRings', [], 1],
        'postFraudInvalidTrafficScan' => ['POST', '/v1/fraud/invalid-traffic/scan', [], [], true, 'json', 'postFraudInvalidTrafficScan', [], 2],
        'postFxRates' => ['POST', '/v1/fx-rates', [], [], true, 'json', 'postFxRates', [], 2],
        'postFxRatesClearOverride' => ['POST', '/v1/fx-rates/clear-override', [], [], true, 'json', 'postFxRatesClearOverride', [], 2],
        'postFxRatesSync' => ['POST', '/v1/fx-rates/sync', [], [], false, 'json', 'postFxRatesSync', [], 1],
        'postGraphql' => ['POST', '/v1/graphql', [], [], true, 'json', 'postGraphql', [], 2],
        'postImportProvider' => ['POST', '/v1/import/{provider}', ['provider'], ['programId' => 'programId', 'dryRun' => 'dryRun', 'destinationUrl' => 'destinationUrl'], true, 'json', 'postImportProvider', ['provider'], 6],
        'postIntegrationsDeliveriesIdRetry' => ['POST', '/v1/integrations/deliveries/{id}/retry', ['id'], [], false, 'json', 'postIntegrationsDeliveriesIdRetry', ['id'], 2],
        'postIntegrationsHubspotTest' => ['POST', '/v1/integrations/hubspot/test', [], [], true, 'json', 'postIntegrationsHubspotTest', [], 2],
        'postIntegrationsSegmentTest' => ['POST', '/v1/integrations/segment/test', [], [], false, 'json', 'postIntegrationsSegmentTest', [], 1],
        'postInvitationsIdWithdraw' => ['POST', '/v1/invitations/{id}/withdraw', ['id'], [], false, 'json', 'postInvitationsIdWithdraw', ['id'], 2],
        'postLinks' => ['POST', '/v1/links', [], [], true, 'json', 'postLinks', [], 2],
        'postMobilePurchases' => ['POST', '/v1/mobile/purchases', [], [], true, 'json', 'postMobilePurchases', [], 2],
        'postNotificationsIdRead' => ['POST', '/v1/notifications/{id}/read', ['id'], [], false, 'json', 'postNotificationsIdRead', ['id'], 2],
        'postOauthToken' => ['POST', '/v1/oauth/token', [], [], true, 'json', 'postOauthToken', [], 2],
        'postOnchainConnections' => ['POST', '/v1/onchain/connections', [], [], true, 'json', 'postOnchainConnections', [], 2],
        'postOrgHostedPagesCheck' => ['POST', '/v1/org/hosted-pages/check', [], [], false, 'json', 'postOrgHostedPagesCheck', [], 1],
        'postOrgMembers' => ['POST', '/v1/org/members', [], [], true, 'json', 'postOrgMembers', [], 2],
        'postOrgPortalAuthTest' => ['POST', '/v1/org/portal-auth/test', [], [], false, 'json', 'postOrgPortalAuthTest', [], 1],
        'postOrgs' => ['POST', '/v1/orgs', [], [], true, 'json', 'postOrgs', [], 2],
        'postOrgSsoDirectTest' => ['POST', '/v1/org/sso/direct/test', [], [], false, 'json', 'postOrgSsoDirectTest', [], 1],
        'postOrgSsoLink' => ['POST', '/v1/org/sso/link', [], [], false, 'json', 'postOrgSsoLink', [], 1],
        'postOrgSsoTickets' => ['POST', '/v1/org/sso/tickets', [], [], true, 'json', 'postOrgSsoTickets', [], 2],
        'postOrgSsoTicketsIdRevoke' => ['POST', '/v1/org/sso/tickets/{id}/revoke', ['id'], [], false, 'json', 'postOrgSsoTicketsIdRevoke', ['id'], 2],
        'postOutreachDraft' => ['POST', '/v1/outreach/draft', [], [], true, 'json', 'postOutreachDraft', [], 2],
        'postOutreachIdApprove' => ['POST', '/v1/outreach/{id}/approve', ['id'], [], false, 'json', 'postOutreachIdApprove', ['id'], 2],
        'postOutreachSendDue' => ['POST', '/v1/outreach/send-due', [], [], false, 'json', 'postOutreachSendDue', [], 1],
        'postPartnerAdvanceAccept' => ['POST', '/v1/partner/advance/accept', [], [], true, 'json', 'postPartnerAdvanceAccept', [], 2],
        'postPartnerAuthWalletNonce' => ['POST', '/v1/partner/auth/wallet/nonce', [], [], true, 'json', 'postPartnerAuthWalletNonce', [], 2],
        'postPartnerAuthWalletVerify' => ['POST', '/v1/partner/auth/wallet/verify', [], [], true, 'json', 'postPartnerAuthWalletVerify', [], 2],
        'postPartnerContractsIdAccept' => ['POST', '/v1/partner/contracts/{id}/accept', ['id'], [], false, 'json', 'postPartnerContractsIdAccept', ['id'], 2],
        'postPartnerContractsIdDecline' => ['POST', '/v1/partner/contracts/{id}/decline', ['id'], [], false, 'json', 'postPartnerContractsIdDecline', ['id'], 2],
        'postPartnerDeals' => ['POST', '/v1/partner/deals', [], [], true, 'json', 'postPartnerDeals', [], 2],
        'postPartnerDisputes' => ['POST', '/v1/partner/disputes', [], [], true, 'json', 'postPartnerDisputes', [], 2],
        'postPartnerInvitationsIdAccept' => ['POST', '/v1/partner/invitations/{id}/accept', ['id'], [], false, 'json', 'postPartnerInvitationsIdAccept', ['id'], 2],
        'postPartnerInvitationsIdDecline' => ['POST', '/v1/partner/invitations/{id}/decline', ['id'], [], false, 'json', 'postPartnerInvitationsIdDecline', ['id'], 2],
        'postPartnerKycSubmit' => ['POST', '/v1/partner/kyc/submit', [], [], true, 'json', 'postPartnerKycSubmit', [], 2],
        'postPartnerLinks' => ['POST', '/v1/partner/links', [], [], true, 'json', 'postPartnerLinks', [], 2],
        'postPartnerNotificationsIdRead' => ['POST', '/v1/partner/notifications/{id}/read', ['id'], [], false, 'json', 'postPartnerNotificationsIdRead', ['id'], 2],
        'postPartnerOrgsOrgIdSelfBilling' => ['POST', '/v1/partner/orgs/{orgId}/self-billing', ['orgId'], [], true, 'json', 'postPartnerOrgsOrgIdSelfBilling', ['orgId'], 3],
        'postPartnerOrgsOrgIdTaxForm' => ['POST', '/v1/partner/orgs/{orgId}/tax-form', ['orgId'], [], true, 'json', 'postPartnerOrgsOrgIdTaxForm', ['orgId'], 3],
        'postPartnerProgramsProgramIdApply' => ['POST', '/v1/partner/programs/{programId}/apply', ['programId'], [], false, 'json', 'postPartnerProgramsProgramIdApply', ['programId'], 2],
        'postPartners' => ['POST', '/v1/partners', [], [], true, 'json', 'postPartners', [], 2],
        'postPartnerSecurityTotpDisable' => ['POST', '/v1/partner/security/totp/disable', [], [], true, 'json', 'postPartnerSecurityTotpDisable', [], 2],
        'postPartnerSecurityTotpEnable' => ['POST', '/v1/partner/security/totp/enable', [], [], true, 'json', 'postPartnerSecurityTotpEnable', [], 2],
        'postPartnerSecurityTotpSetup' => ['POST', '/v1/partner/security/totp/setup', [], [], false, 'json', 'postPartnerSecurityTotpSetup', [], 1],
        'postPartnersIdTaxForm' => ['POST', '/v1/partners/{id}/tax-form', ['id'], [], true, 'json', 'postPartnersIdTaxForm', ['id'], 3],
        'postPartnerTermsVersionIdAccept' => ['POST', '/v1/partner/terms/{versionId}/accept', ['versionId'], [], false, 'json', 'postPartnerTermsVersionIdAccept', ['versionId'], 2],
        'postPassportVerify' => ['POST', '/v1/passport/verify', [], [], true, 'json', 'postPassportVerify', [], 2],
        'postPayoutRuns' => ['POST', '/v1/payout-runs', [], [], false, 'json', 'postPayoutRuns', [], 1],
        'postPayoutRunsIdCancel' => ['POST', '/v1/payout-runs/{id}/cancel', ['id'], [], false, 'json', 'postPayoutRunsIdCancel', ['id'], 2],
        'postPayoutRunsIdExecute' => ['POST', '/v1/payout-runs/{id}/execute', ['id'], [], false, 'json', 'postPayoutRunsIdExecute', ['id'], 2],
        'postPayoutRunsRunScheduled' => ['POST', '/v1/payout-runs/run-scheduled', [], [], false, 'json', 'postPayoutRunsRunScheduled', [], 1],
        'postPrivacyExecutorKeys' => ['POST', '/v1/privacy/executor-keys', [], [], true, 'json', 'postPrivacyExecutorKeys', [], 2],
        'postPrivacyExecutorsAdapterCheck' => ['POST', '/v1/privacy/executors/{adapter}/check', ['adapter'], [], false, 'json', 'postPrivacyExecutorsAdapterCheck', ['adapter'], 2],
        'postPrivacyForget' => ['POST', '/v1/privacy/forget', [], [], true, 'json', 'postPrivacyForget', [], 2],
        'postPrivacyLookup' => ['POST', '/v1/privacy/lookup', [], [], true, 'json', 'postPrivacyLookup', [], 2],
        'postPrivacyRequests' => ['POST', '/v1/privacy/requests', [], [], true, 'json', 'postPrivacyRequests', [], 2],
        'postProfitabilityRebuild' => ['POST', '/v1/profitability/rebuild', [], [], false, 'json', 'postProfitabilityRebuild', [], 1],
        'postPrograms' => ['POST', '/v1/programs', [], [], true, 'json', 'postPrograms', [], 2],
        'postProgramsIdApplyLeveling' => ['POST', '/v1/programs/{id}/apply-leveling', ['id'], [], false, 'json', 'postProgramsIdApplyLeveling', ['id'], 2],
        'postProgramsIdAutopriceRun' => ['POST', '/v1/programs/{id}/autoprice/run', ['id'], [], true, 'json', 'postProgramsIdAutopriceRun', ['id'], 3],
        'postProgramsIdEnrollments' => ['POST', '/v1/programs/{id}/enrollments', ['id'], [], true, 'json', 'postProgramsIdEnrollments', ['id'], 3],
        'postProgramsIdEnrollmentsEnrollmentIdApprove' => ['POST', '/v1/programs/{id}/enrollments/{enrollmentId}/approve', ['id','enrollmentId'], [], false, 'json', 'postProgramsIdEnrollmentsEnrollmentIdApprove', ['id','enrollmentId'], 3],
        'postProgramsIdEnrollmentsEnrollmentIdReject' => ['POST', '/v1/programs/{id}/enrollments/{enrollmentId}/reject', ['id','enrollmentId'], [], false, 'json', 'postProgramsIdEnrollmentsEnrollmentIdReject', ['id','enrollmentId'], 3],
        'postProgramsIdGroups' => ['POST', '/v1/programs/{id}/groups', ['id'], [], true, 'json', 'postProgramsIdGroups', ['id'], 3],
        'postProgramsIdPromotions' => ['POST', '/v1/programs/{id}/promotions', ['id'], [], true, 'json', 'postProgramsIdPromotions', ['id'], 3],
        'postPromotionsIdEnd' => ['POST', '/v1/promotions/{id}/end', ['id'], [], false, 'json', 'postPromotionsIdEnd', ['id'], 2],
        'postPublicProgramsHandleJoin' => ['POST', '/v1/public/programs/{handle}/join', ['handle'], [], true, 'json', 'postPublicProgramsHandleJoin', ['handle'], 3],
        'postQualityRecompute' => ['POST', '/v1/quality/recompute', [], [], false, 'json', 'postQualityRecompute', [], 1],
        'postReferralsAssociate' => ['POST', '/v1/referrals/associate', [], [], true, 'json', 'postReferralsAssociate', [], 2],
        'postReferralsIdApprove' => ['POST', '/v1/referrals/{id}/approve', ['id'], [], false, 'json', 'postReferralsIdApprove', ['id'], 2],
        'postReferralsIdReassign' => ['POST', '/v1/referrals/{id}/reassign', ['id'], [], true, 'json', 'postReferralsIdReassign', ['id'], 3],
        'postReferralsIdVoid' => ['POST', '/v1/referrals/{id}/void', ['id'], [], false, 'json', 'postReferralsIdVoid', ['id'], 2],
        'postRewards' => ['POST', '/v1/rewards', [], [], true, 'json', 'postRewards', [], 2],
        'postRewardsIdRedeem' => ['POST', '/v1/rewards/{id}/redeem', ['id'], [], true, 'json', 'postRewardsIdRedeem', ['id'], 3],
        'postRewardsRedeemByCode' => ['POST', '/v1/rewards/redeem-by-code', [], [], true, 'json', 'postRewardsRedeemByCode', [], 2],
        'postRoiPatternsPatternReview' => ['POST', '/v1/roi/patterns/{pattern}/review', ['pattern'], [], true, 'json', 'postRoiPatternsPatternReview', ['pattern'], 3],
        'postSandboxSimulate' => ['POST', '/v1/sandbox/simulate', [], [], true, 'json', 'postSandboxSimulate', [], 2],
        'postSupportAppsAdapterTest' => ['POST', '/v1/support/apps/{adapter}/test', ['adapter'], [], true, 'json', 'postSupportAppsAdapterTest', ['adapter'], 3],
        'postSupportCardsOrgIdAdapter' => ['POST', '/v1/support/cards/{orgId}/{adapter}', ['orgId','adapter'], [], true, 'json', 'postSupportCardsOrgIdAdapter', ['orgId','adapter'], 4],
        'postTax1099DocumentsIdCorrect' => ['POST', '/v1/tax/1099/documents/{id}/correct', ['id'], [], false, 'json', 'postTax1099DocumentsIdCorrect', ['id'], 2],
        'postTax1099Filings' => ['POST', '/v1/tax/1099/filings', [], [], true, 'json', 'postTax1099Filings', [], 2],
        'postTax1099FilingsIdRefresh' => ['POST', '/v1/tax/1099/filings/{id}/refresh', ['id'], [], false, 'json', 'postTax1099FilingsIdRefresh', ['id'], 2],
        'postTestClockAdvance' => ['POST', '/v1/test_clock/advance', [], [], true, 'json', 'postTestClockAdvance', [], 2],
        'postTrackEvents' => ['POST', '/v1/track/events', [], [], true, 'json', 'postTrackEvents', [], 2],
        'postUnsubscribeToken' => ['POST', '/v1/unsubscribe/{token}', ['token'], [], false, 'json', 'postUnsubscribeToken', ['token'], 2],
        'postValueEvents' => ['POST', '/v1/value/events', [], [], true, 'json', 'postValueEvents', [], 2],
        'postValueImport' => ['POST', '/v1/value/import', [], [], true, 'json', 'postValueImport', [], 2],
        'postWebhookDeliveriesIdReplay' => ['POST', '/v1/webhook-deliveries/{id}/replay', ['id'], [], false, 'json', 'postWebhookDeliveriesIdReplay', ['id'], 2],
        'postWebhookEndpoints' => ['POST', '/v1/webhook-endpoints', [], [], true, 'json', 'postWebhookEndpoints', [], 2],
        'postWebhookEndpointsIdReplay' => ['POST', '/v1/webhook-endpoints/{id}/replay', ['id'], ['since' => 'since'], false, 'json', 'postWebhookEndpointsIdReplay', ['id'], 3],
        'postWebhookEndpointsIdRotateSecret' => ['POST', '/v1/webhook-endpoints/{id}/rotate-secret', ['id'], [], false, 'json', 'postWebhookEndpointsIdRotateSecret', ['id'], 2],
        'postWidgetTokens' => ['POST', '/v1/widget/tokens', [], [], true, 'json', 'postWidgetTokens', [], 2],
        'postZapierConversions' => ['POST', '/v1/zapier/conversions', [], [], true, 'json', 'postZapierConversions', [], 2],
        'postZapierHooks' => ['POST', '/v1/zapier/hooks', [], [], true, 'json', 'postZapierHooks', [], 2],
        'putAuthConnectionsIdSecret' => ['PUT', '/v1/auth/connections/{id}/secret', ['id'], [], true, 'json', 'putAuthConnectionsIdSecret', ['id'], 3],
        'putBillingConnectionsIdCredentials' => ['PUT', '/v1/billing/connections/{id}/credentials', ['id'], [], true, 'json', 'putBillingConnectionsIdCredentials', ['id'], 3],
        'putBillingConnectionsIdSecret' => ['PUT', '/v1/billing/connections/{id}/secret', ['id'], [], true, 'json', 'putBillingConnectionsIdSecret', ['id'], 3],
        'putBillingConnectionsIdValueMapping' => ['PUT', '/v1/billing/connections/{id}/value-mapping', ['id'], [], true, 'json', 'putBillingConnectionsIdValueMapping', ['id'], 3],
        'putBranding' => ['PUT', '/v1/branding', [], [], true, 'json', 'putBranding', [], 2],
        'putEmailSettings' => ['PUT', '/v1/email/settings', [], [], true, 'json', 'putEmailSettings', [], 2],
        'putEmailTemplatesEventLocale' => ['PUT', '/v1/email/templates/{event}/{locale}', ['event','locale'], [], true, 'json', 'putEmailTemplatesEventLocale', ['event','locale'], 4],
        'putIntegrationsHubspot' => ['PUT', '/v1/integrations/hubspot', [], [], true, 'json', 'putIntegrationsHubspot', [], 2],
        'putIntegrationsSegment' => ['PUT', '/v1/integrations/segment', [], [], true, 'json', 'putIntegrationsSegment', [], 2],
        'putMarketplaceListing' => ['PUT', '/v1/marketplace/listing', [], [], true, 'json', 'putMarketplaceListing', [], 2],
        'putMeLocale' => ['PUT', '/v1/me/locale', [], [], true, 'json', 'putMeLocale', [], 2],
        'putMeRoiDigest' => ['PUT', '/v1/me/roi-digest', [], [], true, 'json', 'putMeRoiDigest', [], 2],
        'putNetworkSettings' => ['PUT', '/v1/network/settings', [], [], true, 'json', 'putNetworkSettings', [], 2],
        'putOrgFxFeed' => ['PUT', '/v1/org/fx-feed', [], [], true, 'json', 'putOrgFxFeed', [], 2],
        'putOrgHostedPages' => ['PUT', '/v1/org/hosted-pages', [], [], true, 'json', 'putOrgHostedPages', [], 2],
        'putOrgPayoutSchedule' => ['PUT', '/v1/org/payout-schedule', [], [], true, 'json', 'putOrgPayoutSchedule', [], 2],
        'putOrgPortalAuth' => ['PUT', '/v1/org/portal-auth', [], [], true, 'json', 'putOrgPortalAuth', [], 2],
        'putOrgReferralParams' => ['PUT', '/v1/org/referral-params', [], [], true, 'json', 'putOrgReferralParams', [], 2],
        'putOrgRetention' => ['PUT', '/v1/org/retention', [], [], true, 'json', 'putOrgRetention', [], 2],
        'putOrgSsoDirect' => ['PUT', '/v1/org/sso/direct', [], [], true, 'json', 'putOrgSsoDirect', [], 2],
        'putOrgTaxFiling' => ['PUT', '/v1/org/tax-filing', [], [], true, 'json', 'putOrgTaxFiling', [], 2],
        'putOrgTaxProfile' => ['PUT', '/v1/org/tax-profile', [], [], true, 'json', 'putOrgTaxProfile', [], 2],
        'putOrgTrackingConsent' => ['PUT', '/v1/org/tracking-consent', [], [], true, 'json', 'putOrgTrackingConsent', [], 2],
        'putPartnerLocale' => ['PUT', '/v1/partner/locale', [], [], true, 'json', 'putPartnerLocale', [], 2],
        'putPartnerOrgsOrgIdPayoutProfile' => ['PUT', '/v1/partner/orgs/{orgId}/payout-profile', ['orgId'], [], true, 'json', 'putPartnerOrgsOrgIdPayoutProfile', ['orgId'], 3],
        'putPartnerOrgsOrgIdPostback' => ['PUT', '/v1/partner/orgs/{orgId}/postback', ['orgId'], [], true, 'json', 'putPartnerOrgsOrgIdPostback', ['orgId'], 3],
        'putPartnerOrgsOrgIdVat' => ['PUT', '/v1/partner/orgs/{orgId}/vat', ['orgId'], [], true, 'json', 'putPartnerOrgsOrgIdVat', ['orgId'], 3],
        'putPartnerProfile' => ['PUT', '/v1/partner/profile', [], [], true, 'json', 'putPartnerProfile', [], 2],
        'putPartnersIdPayoutProfile' => ['PUT', '/v1/partners/{id}/payout-profile', ['id'], [], true, 'json', 'putPartnersIdPayoutProfile', ['id'], 3],
        'putPartnersIdVat' => ['PUT', '/v1/partners/{id}/vat', ['id'], [], true, 'json', 'putPartnersIdVat', ['id'], 3],
        'putPayoutConnectionsProvider' => ['PUT', '/v1/payout-connections/{provider}', ['provider'], [], true, 'json', 'putPayoutConnectionsProvider', ['provider'], 3],
        'putProfitabilityProductsProductRef' => ['PUT', '/v1/profitability/products/{productRef}', ['productRef'], [], true, 'json', 'putProfitabilityProductsProductRef', ['productRef'], 3],
        'putProfitabilitySettings' => ['PUT', '/v1/profitability/settings', [], [], true, 'json', 'putProfitabilitySettings', [], 2],
        'putProgramsIdAutopricing' => ['PUT', '/v1/programs/{id}/autopricing', ['id'], [], true, 'json', 'putProgramsIdAutopricing', ['id'], 3],
        'putProgramsIdIncrementality' => ['PUT', '/v1/programs/{id}/incrementality', ['id'], [], true, 'json', 'putProgramsIdIncrementality', ['id'], 3],
        'putProgramsIdNegotiationPolicy' => ['PUT', '/v1/programs/{id}/negotiation-policy', ['id'], [], true, 'json', 'putProgramsIdNegotiationPolicy', ['id'], 3],
        'putProgramsIdPartnersPartnerIdGroup' => ['PUT', '/v1/programs/{id}/partners/{partnerId}/group', ['id','partnerId'], [], true, 'json', 'putProgramsIdPartnersPartnerIdGroup', ['id','partnerId'], 4],
        'putProgramsIdPayoutSchedule' => ['PUT', '/v1/programs/{id}/payout-schedule', ['id'], [], true, 'json', 'putProgramsIdPayoutSchedule', ['id'], 3],
        'putProgramsIdRefereeReward' => ['PUT', '/v1/programs/{id}/referee-reward', ['id'], [], true, 'json', 'putProgramsIdRefereeReward', ['id'], 3],
        'putRewardsRulesKey' => ['PUT', '/v1/rewards/rules/{key}', ['key'], [], true, 'json', 'putRewardsRulesKey', ['key'], 3],
        'putSupportAppsAdapter' => ['PUT', '/v1/support/apps/{adapter}', ['adapter'], [], true, 'json', 'putSupportAppsAdapter', ['adapter'], 3],
    ];

    /**
     * Revoke an API key. DELETE /v1/api-keys/{id}
     *
     * Revokes a key at once. `cascade=true` also revokes every key it minted (and theirs); `pair=true` also revokes its live/test twin. Returns the revoked ids. Needs an owner or admin session, or an API key with the `admin` scope. Audited.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session of any role.
     *
     * cascade: true: also revoke every key this key minted, and theirs.
     * pair: true: also revoke its live/test twin.
     * @return DeleteApiKeysIdResponse
     */
    public function deleteApiKeysId(string $id, ?string $cascade = null, ?string $pair = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/api-keys/' . self::seg($id) . '', ['cascade' => $cascade, 'pair' => $pair], null, $idempotencyKey, 'json');
    }

    /**
     * Delete a marketing asset. DELETE /v1/assets/{id}
     *
     * Removes a marketing asset.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteAssetsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/assets/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Delete an auth connection. DELETE /v1/auth/connections/{id}
     *
     * Removes the connection; its webhook URL and signed endpoints stop accepting calls. Referrals it filed stay.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteAuthConnectionsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/auth/connections/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Delete a billing connection. DELETE /v1/billing/connections/{id}
     *
     * Deletes the connection: its secrets and credentials are wiped and its webhook URL stops accepting events. Recorded billing events stay. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteBillingConnectionsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/billing/connections/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Remove an internal customer. DELETE /v1/billing/internal-customers/{customerRef}
     *
     * Their payments earn again from now on (events already ignored stay ignored). Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteBillingInternalCustomersCustomerRef(string $customerRef, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/billing/internal-customers/' . self::seg($customerRef) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Remove the portal domain. DELETE /v1/branding/domain
     *
     * Stops serving the partner portal on the custom domain.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteBrandingDomain(?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/branding/domain', [], null, $idempotencyKey, 'json');
    }

    /**
     * Remove the link domain. DELETE /v1/branding/link-domain
     *
     * Stops using the custom link domain; links go back to the default host.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteBrandingLinkDomain(?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/branding/link-domain', [], null, $idempotencyKey, 'json');
    }

    /**
     * Close a CLI listener. DELETE /v1/cli/listeners/{id}
     *
     * Closes the listener; queued events are dropped.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteCliListenersId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/cli/listeners/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Reset an email template. DELETE /v1/email/templates/{event}/{locale}
     *
     * Removes the override; the default template is used again.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return DeleteEmailTemplatesEventLocaleResponse
     */
    public function deleteEmailTemplatesEventLocale(string $event, string $locale, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/email/templates/' . self::seg($event) . '/' . self::seg($locale) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Disconnect an integration. DELETE /v1/integrations/{kind}
     *
     * Removes the HubSpot or Segment connection and its stored credential.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteIntegrationsKind(string $kind, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/integrations/' . self::seg($kind) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Remove a team member. DELETE /v1/org/members/{userId}
     *
     * Removes a member. Members can remove themselves; otherwise owner or admin. The last owner stays (409). Audited. Live mode only.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session of any role.
     * @return Ok
     */
    public function deleteOrgMembersUserId(string $userId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/org/members/' . self::seg($userId) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Remove your identity provider. DELETE /v1/org/sso/direct
     *
     * Removes the org's own IdP configuration; team SSO and "require SSO" turn off, so nobody is locked out. Owner only.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`.
     * @return DeleteOrgSsoDirectResponse
     */
    public function deleteOrgSsoDirect(?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/org/sso/direct', [], null, $idempotencyKey, 'json');
    }

    /**
     * Delete a partner. DELETE /v1/partners/{id}
     *
     * Deletes a partner that never did anything, with its enrollments, links, coupons and payout profile. A partner with any clicks, referrals, commissions, payouts or other history is `409`: archive it instead (`status: "archived"`). Audited.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deletePartnersId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/partners/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Disconnect a payout provider. DELETE /v1/payout-connections/{provider}
     *
     * Removes the stored credentials for a provider. Payouts by that method are then simulated until you reconnect. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return DeletePayoutConnectionsProviderResponse
     */
    public function deletePayoutConnectionsProvider(string $provider, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/payout-connections/' . self::seg($provider) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Disconnect a DSAR tool. DELETE /v1/privacy/executors/{adapter}
     *
     * Removes the tool, its key and settings; its URL answers 404 from now on. The request log stays.
     *
     * **Auth:** an API key with `privacy:write` (or `full`), or a session with role `owner`, `admin`.
     * @return DeletePrivacyExecutorsAdapterResponse
     */
    public function deletePrivacyExecutorsAdapter(string $adapter, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/privacy/executors/' . self::seg($adapter) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Delete a product margin. DELETE /v1/profitability/products/{productRef}
     *
     * Removes a product from the margin catalog; its payments fall back to the program or org margin. Audited.
     *
     * **Auth:** an API key with `analytics:write` (or `full`), or a session with role `owner`, `admin`.
     * @return OkStatus
     */
    public function deleteProfitabilityProductsProductRef(string $productRef, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/profitability/products/' . self::seg($productRef) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Delete a reward rule. DELETE /v1/rewards/rules/{key}
     *
     * Deletes the rule. Rewards already granted through it stay.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`.
     * @return DeleteRewardsRulesKeyResponse
     */
    public function deleteRewardsRulesKey(string $key, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/rewards/rules/' . self::seg($key) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Disconnect a support tool. DELETE /v1/support/apps/{adapter}
     *
     * Removes the tool and its secret; its card URL answers 404 from now on.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @return DeleteSupportAppsAdapterResponse
     */
    public function deleteSupportAppsAdapter(string $adapter, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/support/apps/' . self::seg($adapter) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Delete a webhook endpoint. DELETE /v1/webhook-endpoints/{id}
     *
     * Removes the endpoint and its delivery history. Audited.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteWebhookEndpointsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/webhook-endpoints/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Unsubscribe a Zapier hook. DELETE /v1/zapier/hooks/{id}
     *
     * REST hook unsubscribe, called by Zapier when a Zap turns off.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function deleteZapierHooksId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('DELETE', '/v1/zapier/hooks/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get platform metrics. GET /v1/admin/metrics
     *
     * Platform admins only. Live orgs (and suspended ones), partner accounts (and banned ones), programs, commission earned, payouts sent and open fraud cases across the platform.
     *
     * **Auth:** a platform admin session.
     * @return GetAdminMetricsResponse
     */
    public function getAdminMetrics(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/admin/metrics', [], null, $idempotencyKey, 'json');
    }

    /**
     * List organizations. GET /v1/admin/orgs
     *
     * Platform admins only. Organizations, searchable by name with `q`.
     *
     * **Auth:** a platform admin session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAdminOrgsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAdminOrgs(?string $q = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/admin/orgs', ['q' => $q, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAdminOrgs()}, following the pages.
     * @return \Generator<int, GetAdminOrgsResponseDataItem>
     */
    public function getAdminOrgsEach(?string $q = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAdminOrgs(q: $q, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List partner accounts. GET /v1/admin/partner-accounts
     *
     * Platform admins only. Partner accounts with KYC and sanctions status, filtered by `flagged` (banned) and text `q`.
     *
     * **Auth:** a platform admin session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAdminPartnerAccountsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAdminPartnerAccounts(?bool $flagged = null, ?string $q = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/admin/partner-accounts', ['flagged' => $flagged, 'q' => $q, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAdminPartnerAccounts()}, following the pages.
     * @return \Generator<int, GetAdminPartnerAccountsResponseDataItem>
     */
    public function getAdminPartnerAccountsEach(?bool $flagged = null, ?string $q = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAdminPartnerAccounts(flagged: $flagged, q: $q, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List partnered AI agents. GET /v1/agents
     *
     * The AI agents partnered with this org, with their wallet, metadata and how many recommendations each has attributed, most active first.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session with role `owner`, `admin`, `analyst`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAgentsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAgents(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/agents', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAgents()}, following the pages.
     * @return \Generator<int, GetAgentsResponseDataItem>
     */
    public function getAgentsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAgents(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List agent recommendations. GET /v1/agents/recommendations
     *
     * Signed recommendations AI agents have attributed in this org, newest first.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session with role `owner`, `admin`, `analyst`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAgentsRecommendationsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAgentsRecommendations(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/agents/recommendations', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAgentsRecommendations()}, following the pages.
     * @return \Generator<int, GetAgentsRecommendationsResponseDataItem>
     */
    public function getAgentsRecommendationsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAgentsRecommendations(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get revenue by channel. GET /v1/analytics/by-channel
     *
     * Referrals and referred revenue by how they were matched (`coupon`, `deterministic` click, `email_hash`, `probabilistic`, `manual`…).
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAnalyticsByChannelResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAnalyticsByChannel(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/analytics/by-channel', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAnalyticsByChannel()}, following the pages.
     * @return \Generator<int, GetAnalyticsByChannelResponseDataItem>
     */
    public function getAnalyticsByChannelEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAnalyticsByChannel(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get revenue by country. GET /v1/analytics/by-geo
     *
     * Referrals and referred revenue by the country of the winning click, highest revenue first.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAnalyticsByGeoResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAnalyticsByGeo(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/analytics/by-geo', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAnalyticsByGeo()}, following the pages.
     * @return \Generator<int, GetAnalyticsByGeoResponseDataItem>
     */
    public function getAnalyticsByGeoEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAnalyticsByGeo(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get cohort LTV. GET /v1/analytics/cohort-ltv
     *
     * Referred customers grouped by sign-up month over the last `months` (default 6), with net revenue (payments minus refunds) and revenue per customer.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAnalyticsCohortLtvResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAnalyticsCohortLtv(?int $months = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/analytics/cohort-ltv', ['months' => $months, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAnalyticsCohortLtv()}, following the pages.
     * @return \Generator<int, GetAnalyticsCohortLtvResponseDataItem>
     */
    public function getAnalyticsCohortLtvEach(?int $months = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAnalyticsCohortLtv(months: $months, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get coupon performance. GET /v1/analytics/coupon-performance
     *
     * Referrals and revenue per coupon code, highest revenue first.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAnalyticsCouponPerformanceResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAnalyticsCouponPerformance(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/analytics/coupon-performance', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAnalyticsCouponPerformance()}, following the pages.
     * @return \Generator<int, GetAnalyticsCouponPerformanceResponseDataItem>
     */
    public function getAnalyticsCouponPerformanceEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAnalyticsCouponPerformance(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the funnel overview. GET /v1/analytics/overview
     *
     * Over the last `days` (default 30), optionally for one program: clicks (and how many were filtered), visitors, sign-ups, payments, referred revenue, commission earned and reversed, active partners and the click-to-sign-up and sign-up-to-paid rates.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetAnalyticsOverviewResponse
     */
    public function getAnalyticsOverview(?string $programId = null, ?int $days = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/analytics/overview', ['programId' => $programId, 'days' => $days], null, $idempotencyKey, 'json');
    }

    /**
     * Get a daily time series. GET /v1/analytics/timeseries
     *
     * One `metric` (`clicks`, `signups` or `revenue` in minor units) per day over the last `days`, optionally for one program.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAnalyticsTimeseriesResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAnalyticsTimeseries(string $metric, ?int $days = null, ?string $programId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/analytics/timeseries', ['metric' => $metric, 'days' => $days, 'programId' => $programId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAnalyticsTimeseries()}, following the pages.
     * @return \Generator<int, GetAnalyticsTimeseriesResponseDataItem>
     */
    public function getAnalyticsTimeseriesEach(string $metric, ?int $days = null, ?string $programId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAnalyticsTimeseries(metric: $metric, days: $days, programId: $programId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List API keys. GET /v1/api-keys
     *
     * Every key of the org, live and test (a test-mode caller sees test keys only), oldest first, with scopes, pinned version, owner, expiry and last use. Never returns the secret. Filter by `mode` or `owner`.
     *
     * **Auth:** an API key with `team:read` (or `full`), or a session of any role.
     *
     * mode: Only live or only test keys; default both.
     * owner: Only keys with this owner.
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<ApiKey>, has_more: bool, next_cursor: string|null}
     */
    public function getApiKeys(?string $mode = null, ?string $owner = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/api-keys', ['mode' => $mode, 'owner' => $owner, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getApiKeys()}, following the pages.
     * @return \Generator<int, ApiKey>
     */
    public function getApiKeysEach(?string $mode = null, ?string $owner = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getApiKeys(mode: $mode, owner: $owner, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get an API key. GET /v1/api-keys/{id}
     *
     * One key of the org, without its secret.
     *
     * **Auth:** an API key with `team:read` (or `full`), or a session of any role.
     * @return ApiKey
     */
    public function getApiKeysId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/api-keys/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List marketing assets. GET /v1/assets
     *
     * Marketing assets, filtered by `programId`.
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAssetsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAssets(?string $programId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/assets', ['programId' => $programId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAssets()}, following the pages.
     * @return \Generator<int, GetAssetsResponseDataItem>
     */
    public function getAssetsEach(?string $programId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAssets(programId: $programId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get program suggestions. GET /v1/assistant/suggestions
     *
     * Draft-only suggestions for running the program, each with a suggested action for a person to take: partners who never drove a click, links with clicks but no referrals, programs without a commission rule, the review queue, and credit ROI findings. It never changes anything.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetAssistantSuggestionsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getAssistantSuggestions(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/assistant/suggestions', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAssistantSuggestions()}, following the pages.
     * @return \Generator<int, GetAssistantSuggestionsResponseDataItem>
     */
    public function getAssistantSuggestionsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAssistantSuggestions(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List audit log entries. GET /v1/audit-logs
     *
     * Every change recorded in the org, newest first: who did it (`actor`, `actorType`), what (`action`; a trailing `*` matches a prefix such as `payout.*`) and to what (`subjectType`, `subjectId`). Filter by any of those and by `created[gte]`/`created[lte]`.
     *
     * **Auth:** an API key with `audit:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * actor: Actor id: a user, API key or connection id.
     * action: Exact action, or a prefix ending in * (e.g. payout.*).
     * starting_after: An entry id: return the entries after it.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<AuditLogEntry>, has_more: bool, next_cursor: string|null}
     */
    public function getAuditLogs(?string $actor = null, ?string $actorType = null, ?string $action = null, ?string $subjectType = null, ?string $subjectId = null, ?string $createdGte = null, ?string $createdLte = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/audit-logs', ['actor' => $actor, 'actorType' => $actorType, 'action' => $action, 'subjectType' => $subjectType, 'subjectId' => $subjectId, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAuditLogs()}, following the pages.
     * @return \Generator<int, AuditLogEntry>
     */
    public function getAuditLogsEach(?string $actor = null, ?string $actorType = null, ?string $action = null, ?string $subjectType = null, ?string $subjectId = null, ?string $createdGte = null, ?string $createdLte = null, ?int $limit = null, ?string $endingBefore = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAuditLogs(actor: $actor, actorType: $actorType, action: $action, subjectType: $subjectType, subjectId: $subjectId, createdGte: $createdGte, createdLte: $createdLte, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, idempotencyKey: $idempotencyKey));
    }

    /**
     * List auth connections. GET /v1/auth/connections
     *
     * Auth-platform connections with provider, program, status, signature version and rotation state. Secrets are never returned.
     *
     * **Auth:** an API key with `integrations:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<AuthConnection>, has_more: bool, next_cursor: string|null}
     */
    public function getAuthConnections(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/auth/connections', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getAuthConnections()}, following the pages.
     * @return \Generator<int, AuthConnection>
     */
    public function getAuthConnectionsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getAuthConnections(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Export a user (signed protocol). GET /v1/auth/connections/{id}/export
     *
     * An access request the platform forwards: everything filed under the customer and their partner record. Signed with the connection secret in `x-referalli-signature: t=<unix>,v1=…,v2=…` (v2 also signs the request line; once a connection has seen v2 it requires it), with a unique `x-referalli-id` per call. The legacy header names from before the rename are also accepted, for existing integrations. Calls older than 5 minutes, reused ids (`409 replay`), paused connections (`423 connection_paused`) and unknown fields (`422`) are refused.
     *
     * **Auth:** a signature (see above); no API key.
     * @return GetAuthConnectionsIdExportResponse
     */
    public function getAuthConnectionsIdExport(string $id, string $customerRef, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/auth/connections/' . self::seg($id) . '/export', ['customerRef' => $customerRef], null, $idempotencyKey, 'json');
    }

    /**
     * List identity connectors. GET /v1/auth/connections/providers
     *
     * Every auth provider you can connect (Atlas, Clerk, Auth0, Supabase, Firebase, Cognito, Stytch, Kinde, WorkOS, generic, your own auth), with how it connects, who issues the secret, the setup steps, a copyable template where the vendor has no native webhook, and where the referral metadata lands.
     *
     * **Auth:** an API key with `integrations:read` (or `full`), or a session of any role.
     * @return GetAuthConnectionsProvidersResponse
     */
    public function getAuthConnectionsProviders(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/auth/connections/providers', [], null, $idempotencyKey, 'json');
    }

    /**
     * List sign-in providers. GET /v1/auth/providers
     *
     * The identity providers configured on this deployment, for rendering sign-in buttons.
     *
     * **Auth:** none.
     * @return GetAuthProvidersResponse
     */
    public function getAuthProviders(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/auth/providers', [], null, $idempotencyKey, 'json');
    }

    /**
     * List billing connections. GET /v1/billing/connections
     *
     * Billing connections (deleted ones excluded), with status, whether credentials are needed and set, the value mapping and secret-rotation state.
     *
     * **Auth:** an API key with `billing:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<BillingConnection>, has_more: bool, next_cursor: string|null}
     */
    public function getBillingConnections(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/billing/connections', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getBillingConnections()}, following the pages.
     * @return \Generator<int, BillingConnection>
     */
    public function getBillingConnectionsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getBillingConnections(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a billing connection. GET /v1/billing/connections/{id}
     *
     * One billing connection, without its secrets.
     *
     * **Auth:** an API key with `billing:read` (or `full`), or a session of any role.
     * @return BillingConnection
     */
    public function getBillingConnectionsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/billing/connections/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List billing events. GET /v1/billing/events
     *
     * Payments, refunds and other billing events received from every connection, newest first. Filter with `customerRef`, or `status=ignored_by_filter` for the events a product filter or the internal-customer list set aside (recorded, never processed).
     *
     * **Auth:** an API key with `billing:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<BillingEvent>, has_more: bool, next_cursor: string|null}
     */
    public function getBillingEvents(?string $customerRef = null, ?string $status = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/billing/events', ['customerRef' => $customerRef, 'status' => $status, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getBillingEvents()}, following the pages.
     * @return \Generator<int, BillingEvent>
     */
    public function getBillingEventsEach(?string $customerRef = null, ?string $status = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getBillingEvents(customerRef: $customerRef, status: $status, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List internal customers. GET /v1/billing/internal-customers
     *
     * The org's own customers (staff, test accounts, your own plans) whose payments never earn on any connection. Metadata `planSource: "internal"` on the provider's customer does the same without a list.
     *
     * **Auth:** an API key with `billing:read` (or `full`), or a session of any role.
     * @return list<InternalCustomer>
     */
    public function getBillingInternalCustomers(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/billing/internal-customers', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the plan. GET /v1/billing/plan
     *
     * The org's Referalli plan and status, its limits and current usage (programs, partners), the plan catalog, whether there is a subscription to manage and whether this caller may activate a plan without checkout.
     *
     * **Auth:** an API key with `billing:read` (or `full`), or a session of any role.
     * @return GetBillingPlanResponse
     */
    public function getBillingPlan(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/billing/plan', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get branding. GET /v1/branding
     *
     * The org's logo, theme tokens, sender address, and its custom portal and link domains with their status (`none`, `pending` DNS, `provisioning` a certificate, `active`), and `warnings` for theme colour pairs below WCAG AA contrast.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     * @return GetBrandingResponse
     */
    public function getBranding(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/branding', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the support-chat identity. GET /v1/chatly/identity
     *
     * The signed-in merchant user or partner as a Chatly widget identity: `externalId` (`merchant:<id>` or `partner:<id>`), email, name and `userHash`, the HMAC-SHA256 of `externalId` with Referalli's identity secret. `identity` is null when signed out or when identity verification isn't configured. Never cached.
     *
     * **Auth:** none.
     * @return GetChatlyIdentityResponse
     */
    public function getChatlyIdentity(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/chatly/identity', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a customer's consent. GET /v1/cleanroom/consent
     *
     * A customer's recorded consent: whether granted, its purposes, the attributes they declared and when it changed. `consent: null` when none is recorded.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     * @return GetCleanroomConsentResponse
     */
    public function getCleanroomConsent(string $customerRef, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/cleanroom/consent', ['customerRef' => $customerRef], null, $idempotencyKey, 'json');
    }

    /**
     * Query the clean room. GET /v1/cleanroom/query
     *
     * Aggregates over consenting customers only, grouped by a zero-party attribute they declared (`dimension`): customers, converted customers and referred revenue per value. Cohorts smaller than 5 are suppressed (k-anonymity); individual rows never leave.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     * @return GetCleanroomQueryResponse
     */
    public function getCleanroomQuery(string $dimension, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/cleanroom/query', ['dimension' => $dimension], null, $idempotencyKey, 'json');
    }

    /**
     * Get consent coverage. GET /v1/clicks/consent-coverage
     *
     * The share of attributed sign-ups in the last `days` (default 30) whose referral carries consent evidence, on its click or on the `associate` call. Low coverage means sign-ups are attributed from tags without a consent setting (`none`) or from server-side calls that don't pass `consent`.
     *
     * **Auth:** an API key with `links:read` (or `full`), or a session of any role.
     *
     * days: Look-back window in days.
     * @return GetClicksConsentCoverageResponse
     */
    public function getClicksConsentCoverage(?int $days = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/clicks/consent-coverage', ['days' => $days], null, $idempotencyKey, 'json');
    }

    /**
     * Get a click. GET /v1/clicks/{id}
     *
     * One click with its consent evidence: what the visitor's CMP said when the tracker stored the referral (`consent.provider`, `state`, `stamp`, `tcString`…). A redirect click (`/go`) is recorded before the landing page reads the CMP, so its evidence comes from the first consented visit beacon naming it. `consent` is null when none arrived.
     *
     * **Auth:** an API key with `links:read` (or `full`), or a session of any role.
     * @return GetClicksIdResponse
     */
    public function getClicksId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/clicks/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a pending CLI sign-in. GET /v1/cli/device-codes/{userCode}
     *
     * For the approval page: the pending code, which CLI asked and when it expires. Needs a signed-in person (owner or admin). 404 when expired or used.
     *
     * **Auth:** an API key with `team:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetCliDeviceCodesUserCodeResponse
     */
    public function getCliDeviceCodesUserCode(string $userCode, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/cli/device-codes/' . self::seg($userCode) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Receive listener events. GET /v1/cli/listeners/{id}/events
     *
     * Up to 50 queued events for the listener, oldest first, each with its body and signed headers. `wait` long-polls up to 25 seconds for the first event. Polling keeps the listener alive.
     *
     * **Auth:** an API key with `webhooks:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetCliListenersIdEventsResponse
     */
    public function getCliListenersIdEvents(string $id, ?int $wait = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/cli/listeners/' . self::seg($id) . '/events', ['wait' => $wait], null, $idempotencyKey, 'json');
    }

    /**
     * Tail the request log. GET /v1/cli/logs
     *
     * The CLI's `logs tail` command: the org's recent API requests (method, path without query string, status, latency, actor). The first call returns the latest 20 and a `cursor`; pass it as `after` (with `wait` to long-poll up to 25 seconds) for newer entries. Kept for a day.
     *
     * **Auth:** an API key with `audit:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * after: Return entries after this cursor.
     * @return GetCliLogsResponse
     */
    public function getCliLogs(?int $after = null, ?int $wait = null, ?int $limit = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/cli/logs', ['after' => $after, 'wait' => $wait, 'limit' => $limit], null, $idempotencyKey, 'json');
    }

    /**
     * List triggerable topics. GET /v1/cli/topics
     *
     * The event topics `POST /v1/cli/trigger` can send.
     *
     * **Auth:** an API key with `webhooks:read` (or `full`), or a session of any role.
     * @return GetCliTopicsResponse
     */
    public function getCliTopics(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/cli/topics', [], null, $idempotencyKey, 'json');
    }

    /**
     * List commission rules. GET /v1/commission-rules
     *
     * Every rule version, by program and newest version first. Filter with `programId`.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<CommissionRule>, has_more: bool, next_cursor: string|null}
     */
    public function getCommissionRules(?string $programId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/commission-rules', ['programId' => $programId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getCommissionRules()}, following the pages.
     * @return \Generator<int, CommissionRule>
     */
    public function getCommissionRulesEach(?string $programId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getCommissionRules(programId: $programId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List commission ledger events. GET /v1/commissions
     *
     * The append-only commission ledger, newest first: `earned` lines and the `approved`, `paid`, `reversed` and `adjusted` events recorded against them (`relatedCommissionId`). Filter by `partnerId`, `programId`, `type` or `referralId`.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<CommissionEvent>, has_more: bool, next_cursor: string|null}
     */
    public function getCommissions(?string $partnerId = null, ?string $programId = null, ?string $type = null, ?string $referralId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/commissions', ['partnerId' => $partnerId, 'programId' => $programId, 'type' => $type, 'referralId' => $referralId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getCommissions()}, following the pages.
     * @return \Generator<int, CommissionEvent>
     */
    public function getCommissionsEach(?string $partnerId = null, ?string $programId = null, ?string $type = null, ?string $referralId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getCommissions(partnerId: $partnerId, programId: $programId, type: $type, referralId: $referralId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a commission. GET /v1/commissions/{id}
     *
     * One ledger event. An `earned` line also carries its billing event, its net after reversals and adjustments, its state (`pending`, `approved` or `paid`) and every event recorded against it.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     * @return CommissionLine
     */
    public function getCommissionsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/commissions/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List partner contracts. GET /v1/contracts
     *
     * The org's contracts and their status (`draft`, `sent`, `accepted`, `declined`, `void`).
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetContractsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getContracts(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/contracts', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getContracts()}, following the pages.
     * @return \Generator<int, GetContractsResponseDataItem>
     */
    public function getContractsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getContracts(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List coupon codes. GET /v1/coupons
     *
     * Coupon codes, filtered by `programId` and/or `partnerId`.
     *
     * **Auth:** an API key with `links:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Coupon>, has_more: bool, next_cursor: string|null}
     */
    public function getCoupons(?string $programId = null, ?string $partnerId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/coupons', ['programId' => $programId, 'partnerId' => $partnerId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getCoupons()}, following the pages.
     * @return \Generator<int, Coupon>
     */
    public function getCouponsEach(?string $programId = null, ?string $partnerId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getCoupons(programId: $programId, partnerId: $partnerId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Search creators. GET /v1/creators
     *
     * Published creator profiles, most engaged first, filtered by text (`q`), `category`, `channel`, minimum audience, minimum engagement and audience country. Each carries verified stats and whether this org already invited them. Emails are never returned.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<CreatorProfile>, has_more: bool, next_cursor: string|null}
     */
    public function getCreators(?string $q = null, ?string $category = null, ?string $channel = null, ?int $minAudience = null, ?int $minEngagementBps = null, ?string $audienceCountry = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/creators', ['q' => $q, 'category' => $category, 'channel' => $channel, 'minAudience' => $minAudience, 'minEngagementBps' => $minEngagementBps, 'audienceCountry' => $audienceCountry, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getCreators()}, following the pages.
     * @return \Generator<int, CreatorProfile>
     */
    public function getCreatorsEach(?string $q = null, ?string $category = null, ?string $channel = null, ?int $minAudience = null, ?int $minEngagementBps = null, ?string $audienceCountry = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getCreators(q: $q, category: $category, channel: $channel, minAudience: $minAudience, minEngagementBps: $minEngagementBps, audienceCountry: $audienceCountry, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a creator. GET /v1/creators/{accountId}
     *
     * One published creator profile with verified stats. 404 when not listed.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session with role `owner`, `admin`.
     * @return CreatorProfile
     */
    public function getCreatorsAccountId(string $accountId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/creators/' . self::seg($accountId) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List registered deals. GET /v1/deals
     *
     * Deals partners registered, newest first. Filter with `status` (`submitted`, `approved`, `rejected`, `won`, `lost`).
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetDealsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getDeals(?string $status = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/deals', ['status' => $status, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getDeals()}, following the pages.
     * @return \Generator<int, GetDealsResponseDataItem>
     */
    public function getDealsEach(?string $status = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getDeals(status: $status, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List partner disputes. GET /v1/disputes
     *
     * Disputes partners filed with this org, newest first.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetDisputesResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getDisputes(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/disputes', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getDisputes()}, following the pages.
     * @return \Generator<int, GetDisputesResponseDataItem>
     */
    public function getDisputesEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getDisputes(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get email settings. GET /v1/email/settings
     *
     * The org's own email provider (`resend`, `brevo` or `postmark`), sender identity, branding and sending-domain status. The API key is never returned.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session with role `owner`, `admin`.
     * @return EmailSettings
     */
    public function getEmailSettings(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/email/settings', [], null, $idempotencyKey, 'json');
    }

    /**
     * List email templates. GET /v1/email/templates
     *
     * Every email event with its placeholders and, per locale, the default template and the org's override if any.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<EmailTemplateEvent>, has_more: bool, next_cursor: string|null}
     */
    public function getEmailTemplates(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/email/templates', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getEmailTemplates()}, following the pages.
     * @return \Generator<int, EmailTemplateEvent>
     */
    public function getEmailTemplatesEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getEmailTemplates(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get one org's embed manifest. GET /v1/embed
     *
     * The embed manifest for the org that owns `token` (its public tracking token): its link domain in the CSP origins, its longest program cookie window as the storage lifetime, and its consent default. Public, CORS `*`.
     *
     * **Auth:** none.
     *
     * token: The org's public tracking token.
     * @return GetWellKnownForgedeckEmbedJsonResponse
     */
    public function getEmbed(string $token, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/embed', ['token' => $token], null, $idempotencyKey, 'json');
    }

    /**
     * Read embedded partner stats. GET /v1/embed/summary
     *
     * Called by the embed component with `Authorization: Bearer <embed token>`: the partner's name, eligible clicks, active referrals, balances and link codes. 401 for a missing, invalid or expired token.
     *
     * **Auth:** none.
     * @return GetEmbedSummaryResponse
     */
    public function getEmbedSummary(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/embed/summary', [], null, $idempotencyKey, 'json');
    }

    /**
     * List past events. GET /v1/events
     *
     * The org's events, oldest first, in the shape webhook deliveries carry: filter with `since` and `topics`, page with `after` (the previous page's `nextCursor`). Every event is listed whether or not an endpoint subscribed to it. `referalli events tail --since 1h` uses it to backfill before tailing live.
     *
     * **Auth:** an API key with `webhooks:read` (or `full`), or a session of any role.
     *
     * since: Only events created at or after this time.
     * topics: Comma-separated topics (default: every topic).
     * after: The `nextCursor` of the previous page: events after this one.
     * @return GetEventsResponse
     */
    public function getEvents(?string $since = null, ?string $topics = null, ?string $after = null, ?int $limit = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/events', ['since' => $since, 'topics' => $topics, 'after' => $after, 'limit' => $limit], null, $idempotencyKey, 'json');
    }

    /**
     * Export payouts for accounting. GET /v1/export/accounting
     *
     * A year's sent payouts as a CSV that QuickBooks (`format=quickbooks`, the default) or Xero imports.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return string
     */
    public function getExportAccounting(int $year, ?string $format = null, ?string $idempotencyKey = null): string
    {
        return $this->request('GET', '/v1/export/accounting', ['format' => $format, 'year' => $year], null, $idempotencyKey, 'text');
    }

    /**
     * Export all org data. GET /v1/export/full
     *
     * Every tenant table of the org as NDJSON (one JSON object per line, tagged with its table), streamed so any size works. Owner or admin.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session with role `owner`, `admin`.
     * @return string
     */
    public function getExportFull(?string $idempotencyKey = null): string
    {
        return $this->request('GET', '/v1/export/full', [], null, $idempotencyKey, 'text');
    }

    /**
     * List fraud cases. GET /v1/fraud/cases
     *
     * The fraud case queue (self-referrals, quality, rings, value patterns, identity risk), newest first, with the evidence. Filter with `status`.
     *
     * **Auth:** an API key with `fraud:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<FraudCase>, has_more: bool, next_cursor: string|null}
     */
    public function getFraudCases(?string $status = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/fraud/cases', ['status' => $status, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getFraudCases()}, following the pages.
     * @return \Generator<int, FraudCase>
     */
    public function getFraudCasesEach(?string $status = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getFraudCases(status: $status, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List FX rates. GET /v1/fx-rates
     *
     * The org's rates first, then the platform fallback, newest per pair first. A payout uses the org's latest rate at or before the run, else the platform's. Filter by `base` and `quote`.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session with role `owner`, `admin`, `finance`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<FxRate>, has_more: bool, next_cursor: string|null}
     */
    public function getFxRates(?string $base = null, ?string $quote = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/fx-rates', ['base' => $base, 'quote' => $quote, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getFxRates()}, following the pages.
     * @return \Generator<int, FxRate>
     */
    public function getFxRatesEach(?string $base = null, ?string $quote = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getFxRates(base: $base, quote: $quote, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Query the GraphQL read layer. GET /v1/graphql
     *
     * A read-only GraphQL endpoint over the same org-scoped data as REST (programs, partners, referrals, analytics), with the same authentication. Mutations stay in REST.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetGraphqlResponse
     */
    public function getGraphql(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/graphql', [], null, $idempotencyKey, 'json');
    }

    /**
     * Check API health. GET /v1/health
     *
     * `200 { "ok": true }` when this instance can serve requests: both database pools answer and it is not shutting down. Otherwise `503` with `reason` (`shutting_down`, with `Retry-After`, or `database_unreachable`).
     *
     * **Auth:** none.
     * @return Ok
     */
    public function getHealth(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/health', [], null, $idempotencyKey, 'json');
    }

    /**
     * Describe the current host. GET /v1/hosts/current
     *
     * What the request's host is: a merchant's verified portal domain (with the org's name, branding and public programs), a merchant link domain, or Referalli's own app. Used by the web app before anyone signs in.
     *
     * **Auth:** none.
     * @return GetHostsCurrentResponse
     */
    public function getHostsCurrent(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/hosts/current', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the current host's theme stylesheet. GET /v1/hosts/current/theme.css
     *
     * On a merchant's portal domain, the org's theme tokens as a `:root` stylesheet; empty elsewhere.
     *
     * **Auth:** none.
     * @return string
     */
    public function getHostsCurrentThemeCss(?string $idempotencyKey = null): string
    {
        return $this->request('GET', '/v1/hosts/current/theme.css', [], null, $idempotencyKey, 'text');
    }

    /**
     * Get incrementality results. GET /v1/incrementality
     *
     * For a program's active referrals: treatment and control counts, conversion rates and lift, overall and per partner.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetIncrementalityResponse
     */
    public function getIncrementality(string $programId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/incrementality', ['programId' => $programId], null, $idempotencyKey, 'json');
    }

    /**
     * Check integration health. GET /v1/integration-health
     *
     * Every connection the org depends on, each with `ok`, a `detail`, and when it fails a `fix` and `docs` link: billing connections (and when each last received an event), sign-up connections, the tracking snippet (a visit in the last 30 days), payout connections, outbound webhook endpoints, and every adapter of a connected port. `hop` names the leg that failed on a path between systems. `ok` at the top is true only when every check is.
     *
     * **Auth:** an API key with `integrations:read` (or `full`), or a session of any role.
     * @return GetIntegrationHealthResponse
     */
    public function getIntegrationHealth(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/integration-health', [], null, $idempotencyKey, 'json');
    }

    /**
     * List integrations. GET /v1/integrations
     *
     * The HubSpot and Segment connections with status, settings and the last test result. Credentials are never returned.
     *
     * **Auth:** an API key with `integrations:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetIntegrationsResponse
     */
    public function getIntegrations(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/integrations', [], null, $idempotencyKey, 'json');
    }

    /**
     * List integration deliveries. GET /v1/integrations/deliveries
     *
     * What was sent to Zapier, HubSpot and Segment, newest first, filtered by `kind` and `status`.
     *
     * **Auth:** an API key with `integrations:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<IntegrationDelivery>, has_more: bool, next_cursor: string|null}
     */
    public function getIntegrationsDeliveries(?string $kind = null, ?string $status = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/integrations/deliveries', ['kind' => $kind, 'status' => $status, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getIntegrationsDeliveries()}, following the pages.
     * @return \Generator<int, IntegrationDelivery>
     */
    public function getIntegrationsDeliveriesEach(?string $kind = null, ?string $status = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getIntegrationsDeliveries(kind: $kind, status: $status, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List creator invitations. GET /v1/invitations
     *
     * The org's creator invitations and their status (`pending`, `accepted`, `declined`, `withdrawn`).
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetInvitationsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getInvitations(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/invitations', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getInvitations()}, following the pages.
     * @return \Generator<int, GetInvitationsResponseDataItem>
     */
    public function getInvitationsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getInvitations(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List links. GET /v1/links
     *
     * Tracked links with their short URL and click count, filtered by `programId` and/or `partnerId`.
     *
     * **Auth:** an API key with `links:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Link>, has_more: bool, next_cursor: string|null}
     */
    public function getLinks(?string $programId = null, ?string $partnerId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/links', ['programId' => $programId, 'partnerId' => $partnerId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getLinks()}, following the pages.
     * @return \Generator<int, Link>
     */
    public function getLinksEach(?string $programId = null, ?string $partnerId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getLinks(programId: $programId, partnerId: $partnerId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a link's QR code. GET /v1/links/{id}/qr
     *
     * An SVG QR code for the link's short URL.
     *
     * **Auth:** an API key with `links:read` (or `full`), or a session of any role.
     * @return string
     */
    public function getLinksIdQr(string $id, ?string $idempotencyKey = null): string
    {
        return $this->request('GET', '/v1/links/' . self::seg($id) . '/qr', [], null, $idempotencyKey, 'text');
    }

    /**
     * List the org's marketplace listings. GET /v1/marketplace/listing
     *
     * The org's listings with their platform-computed stats: eligible clicks, active referrals, earnings per click, conversion rate, payout reliability and approval latency.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetMarketplaceListingResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getMarketplaceListing(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/marketplace/listing', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getMarketplaceListing()}, following the pages.
     * @return \Generator<int, GetMarketplaceListingResponseDataItem>
     */
    public function getMarketplaceListingEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getMarketplaceListing(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the current caller. GET /v1/me
     *
     * Who is calling. With a user session: the user and their org memberships (no `x-org-id` needed). With an API key: the key (name, prefix, scopes, pinned version, mode, owner, expiry) and its org.
     *
     * **Auth:** an API key with `team:read` (or `full`), or a session of any role.
     * @return GetMeResponse
     */
    public function getMe(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/me', [], null, $idempotencyKey, 'json');
    }

    /**
     * List negotiation rounds. GET /v1/negotiations
     *
     * Agent negotiation rounds and their decisions, newest first, optionally for one program.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetNegotiationsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getNegotiations(?string $programId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/negotiations', ['programId' => $programId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getNegotiations()}, following the pages.
     * @return \Generator<int, GetNegotiationsResponseDataItem>
     */
    public function getNegotiationsEach(?string $programId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getNegotiations(programId: $programId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a customer's network journey. GET /v1/network/journey
     *
     * For a hashed customer email, the partner accounts that touched them at any opted-in merchant (never which merchant) and each one's credit under `model`. 403 unless the org has joined the network.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     * @return GetNetworkJourneyResponse
     */
    public function getNetworkJourney(string $emailHash, ?string $model = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/network/journey', ['emailHash' => $emailHash, 'model' => $model], null, $idempotencyKey, 'json');
    }

    /**
     * Get network membership. GET /v1/network/settings
     *
     * Whether the org contributes to (and can read) the attribution network.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     * @return GetNetworkSettingsResponse
     */
    public function getNetworkSettings(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/network/settings', [], null, $idempotencyKey, 'json');
    }

    /**
     * List notifications. GET /v1/notifications
     *
     * The org's in-app notifications (failing webhooks, anomalies, answered invitations…), newest first. `unread=true` for unread only.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     *
     * unread: true: unread notifications only.
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Notification>, has_more: bool, next_cursor: string|null}
     */
    public function getNotifications(?string $unread = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/notifications', ['unread' => $unread, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getNotifications()}, following the pages.
     * @return \Generator<int, Notification>
     */
    public function getNotificationsEach(?string $unread = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getNotifications(unread: $unread, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List on-chain connections. GET /v1/onchain/connections
     *
     * The org's on-chain conversion connections.
     *
     * **Auth:** an API key with `billing:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetOnchainConnectionsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getOnchainConnections(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/onchain/connections', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getOnchainConnections()}, following the pages.
     * @return \Generator<int, GetOnchainConnectionsResponseDataItem>
     */
    public function getOnchainConnectionsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getOnchainConnections(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the OpenAPI document. GET /v1/openapi.json
     *
     * This reference as an OpenAPI 3.1 document (JSON).
     *
     * **Auth:** none.
     * @return GetOpenapiJsonResponse
     */
    public function getOpenapiJson(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/openapi.json', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the OpenAPI document as YAML. GET /v1/openapi.yaml
     *
     * The same OpenAPI 3.1 document as `GET /v1/openapi.json`, serialized as YAML.
     *
     * **Auth:** none.
     * @return string
     */
    public function getOpenapiYaml(?string $idempotencyKey = null): string
    {
        return $this->request('GET', '/v1/openapi.yaml', [], null, $idempotencyKey, 'text');
    }

    /**
     * Get the organization. GET /v1/org
     *
     * The current org: name, plan, settings, public `trackingToken`, payout KYC requirement and mode (`livemode`; test orgs also carry `liveOrgId`).
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     * @return Org
     */
    public function getOrg(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the FX feed setting. GET /v1/org/fx-feed
     *
     * Whether the daily ECB reference-rate feed is on for this org, and the date of its latest rate.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return GetOrgFxFeedResponse
     */
    public function getOrgFxFeed(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/fx-feed', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the hosted-page consent and chat. GET /v1/org/hosted-pages
     *
     * What runs on the pages Referalli hosts for you on your own portal domain (the partner portal and `/join`): your consent banner (Cookie Munch, OneTrust, Cookiebot, Usercentrics, Didomi, Osano, Termly, iubenda, a custom CMP, a built-in necessary-only notice, or none) and your support chat (Chatly, Intercom, Crisp or custom). `served` is exactly what visitors get: the head tags, the "Cookie settings" link and the Content-Security-Policy built from these adapters. Referalli's own banner and chat never run on your domain.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     * @return GetOrgHostedPagesResponse
     */
    public function getOrgHostedPages(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/hosted-pages', [], null, $idempotencyKey, 'json');
    }

    /**
     * List team members. GET /v1/org/members
     *
     * Members of the org with their role and email, oldest first.
     *
     * **Auth:** an API key with `team:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Member>, has_more: bool, next_cursor: string|null}
     */
    public function getOrgMembers(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/members', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getOrgMembers()}, following the pages.
     * @return \Generator<int, Member>
     */
    public function getOrgMembersEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getOrgMembers(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get payout schedules. GET /v1/org/payout-schedule
     *
     * The org schedule and its next run date, plus each program's override (`{ kind: 'off' }`, its own schedule, or `null` to follow the org) and next run date.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session of any role.
     * @return GetOrgPayoutScheduleResponse
     */
    public function getOrgPayoutSchedule(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/payout-schedule', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get partner sign-in settings. GET /v1/org/portal-auth
     *
     * How partners sign in to the org's portal: `referalli` (partner accounts, the default), `oidc` (the merchant's IdP) or `custom` (the merchant's own session, as a short-lived JWT). Includes the audience tokens must carry, the URL to send partners to, the redirect URI to register, and the last check. Never the secret.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetOrgPortalAuthResponse
     */
    public function getOrgPortalAuth(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/portal-auth', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get referral query parameters. GET /v1/org/referral-params
     *
     * The query parameters aff.js reads a referral code from: the built-in ones (`via`, `ref`, `aff`) and the org's extra ones.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     * @return GetOrgReferralParamsResponse
     */
    public function getOrgReferralParams(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/referral-params', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the data retention policy. GET /v1/org/retention
     *
     * How many days each kind of raw data is kept before the nightly purge, the allowed minimum and default per kind, and the last purge run.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     * @return Retention
     */
    public function getOrgRetention(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/retention', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get SSO settings. GET /v1/org/sso
     *
     * Single sign-on for the org: whether SSO is configured on this deployment and linked to a directory tenant, its connections and domains, whether SSO is required, the role mapping, recent setup tickets and any provider error.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetOrgSsoResponse
     */
    public function getOrgSso(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/sso', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get SAML metadata. GET /v1/org/sso/connections/{id}/saml-metadata
     *
     * The SAML service-provider metadata for one of the org's SSO connections, to give the identity provider.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetOrgSsoConnectionsIdSamlMetadataResponse
     */
    public function getOrgSsoConnectionsIdSamlMetadata(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/sso/connections/' . self::seg($id) . '/saml-metadata', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the tax profile. GET /v1/org/tax-profile
     *
     * The org's legal name, address, country, VAT id, EIN, domestic VAT rate, whether partner VAT ids are checked against EU VIES, and the 1099 filing provider.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return TaxProfile
     */
    public function getOrgTaxProfile(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/tax-profile', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the tracker's consent default. GET /v1/org/tracking-consent
     *
     * How `aff.js` reads visitor consent unless the tag says otherwise (`data-consent`): `auto` detects the site's CMP (Cookie Munch, OneTrust, Cookiebot, Usercentrics, Didomi, Osano, Termly, IAB TCF and GPP, Google Consent Mode, or `window.referalliConsent`), an adapter id pins one, `pending` waits for `aff.consent(true|false)`, and `none` always stores. Until consent is granted nothing is stored or sent; the referral stays in memory for the sign-up. `noCmp` is what `auto` does on a site without a CMP. `configured: false` is an org that never chose: it serves `none`, so existing tags behave as before. Lists the adapters with their default category.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     * @return GetOrgTrackingConsentResponse
     */
    public function getOrgTrackingConsent(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/org/tracking-consent', [], null, $idempotencyKey, 'json');
    }

    /**
     * List outreach messages. GET /v1/outreach
     *
     * Drafted, approved and sent outreach messages, newest first.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetOutreachResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getOutreach(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/outreach', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getOutreach()}, following the pages.
     * @return \Generator<int, GetOutreachResponseDataItem>
     */
    public function getOutreachEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getOutreach(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List my achievements. GET /v1/partner/achievements
     *
     * Badges computed from the ledger (first click, referral milestones, first payout, $1,000 earned), each with progress toward its target.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerAchievementsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerAchievements(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/achievements', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerAchievements()}, following the pages.
     * @return \Generator<int, GetPartnerAchievementsResponseDataItem>
     */
    public function getPartnerAchievementsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerAchievements(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List my advances. GET /v1/partner/advance
     *
     * The partner's advances with what remains to repay.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerAdvanceResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerAdvance(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/advance', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerAdvance()}, following the pages.
     * @return \Generator<int, GetPartnerAdvanceResponseDataItem>
     */
    public function getPartnerAdvanceEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerAdvance(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get my advance offer. GET /v1/partner/advance/offer
     *
     * How much the partner could receive now against future commissions (`maxAdvanceMinor`), from their recent run rate and quality score, and the fee.
     *
     * **Auth:** a partner session.
     * @return GetPartnerAdvanceOfferResponse
     */
    public function getPartnerAdvanceOffer(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/advance/offer', [], null, $idempotencyKey, 'json');
    }

    /**
     * List marketing assets. GET /v1/partner/assets
     *
     * Marketing assets (copy, images, banners) of the programs the partner is approved in; group-only assets show only to that group's members.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerAssetsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerAssets(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/assets', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerAssets()}, following the pages.
     * @return \Generator<int, GetPartnerAssetsResponseDataItem>
     */
    public function getPartnerAssetsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerAssets(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List my contracts. GET /v1/partner/contracts
     *
     * Contracts merchants sent the partner.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerContractsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerContracts(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/contracts', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerContracts()}, following the pages.
     * @return \Generator<int, GetPartnerContractsResponseDataItem>
     */
    public function getPartnerContractsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerContracts(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List my deals. GET /v1/partner/deals
     *
     * The partner's registered deals across merchants, newest first.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerDealsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerDeals(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/deals', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerDeals()}, following the pages.
     * @return \Generator<int, GetPartnerDealsResponseDataItem>
     */
    public function getPartnerDealsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerDeals(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List my disputes. GET /v1/partner/disputes
     *
     * Disputes the partner filed about missing or wrong credit, newest first, with the merchant's resolution.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerDisputesResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerDisputes(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/disputes', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerDisputes()}, following the pages.
     * @return \Generator<int, GetPartnerDisputesResponseDataItem>
     */
    public function getPartnerDisputesEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerDisputes(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List my groups. GET /v1/partner/groups
     *
     * The partner's groups across programs, with their onboarding and payout terms.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerGroupsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerGroups(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/groups', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerGroups()}, following the pages.
     * @return \Generator<int, GetPartnerGroupsResponseDataItem>
     */
    public function getPartnerGroupsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerGroups(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List my invitations. GET /v1/partner/invitations
     *
     * Program invitations merchants sent the partner.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerInvitationsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerInvitations(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/invitations', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerInvitations()}, following the pages.
     * @return \Generator<int, GetPartnerInvitationsResponseDataItem>
     */
    public function getPartnerInvitationsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerInvitations(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get my identity verification status. GET /v1/partner/kyc/status
     *
     * The partner account's KYC status (`unverified`, `pending`, `verified`, `rejected`), sanctions screening status and when it was verified.
     *
     * **Auth:** a partner session.
     * @return GetPartnerKycStatusResponse
     */
    public function getPartnerKycStatus(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/kyc/status', [], null, $idempotencyKey, 'json');
    }

    /**
     * List my links. GET /v1/partner/links
     *
     * The partner's tracked links across merchants, newest first, with the short URL, the `?via=` parameter for direct links and eligible clicks.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerLinksResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerLinks(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/links', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerLinks()}, following the pages.
     * @return \Generator<int, GetPartnerLinksResponseDataItem>
     */
    public function getPartnerLinksEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerLinks(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get my link's QR code. GET /v1/partner/links/{id}/qr
     *
     * An SVG QR code for one of the partner's links.
     *
     * **Auth:** a partner session.
     * @return string
     */
    public function getPartnerLinksIdQr(string $id, ?string $idempotencyKey = null): string
    {
        return $this->request('GET', '/v1/partner/links/' . self::seg($id) . '/qr', [], null, $idempotencyKey, 'text');
    }

    /**
     * Browse the marketplace. GET /v1/partner/marketplace
     *
     * Public listings of active live programs across every merchant, sponsored first, with commission terms and platform-computed stats. Filter with `category`. Partner session only.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerMarketplaceResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerMarketplace(?string $category = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/marketplace', ['category' => $category, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerMarketplace()}, following the pages.
     * @return \Generator<int, GetPartnerMarketplaceResponseDataItem>
     */
    public function getPartnerMarketplaceEach(?string $category = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerMarketplace(category: $category, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get my account and memberships. GET /v1/partner/me
     *
     * The partner account and every merchant it partners with, each with its programs and enrollment status.
     *
     * **Auth:** a partner session.
     * @return GetPartnerMeResponse
     */
    public function getPartnerMe(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/me', [], null, $idempotencyKey, 'json');
    }

    /**
     * List my notifications. GET /v1/partner/notifications
     *
     * The partner account's notifications, newest first.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Notification>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerNotifications(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/notifications', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerNotifications()}, following the pages.
     * @return \Generator<int, Notification>
     */
    public function getPartnerNotificationsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerNotifications(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get self-billing status. GET /v1/partner/orgs/{orgId}/self-billing
     *
     * The partner's VAT details with this merchant and whether they accepted the current self-billing agreement (`currentVersion`).
     *
     * **Auth:** a partner session.
     * @return GetPartnerOrgsOrgIdSelfBillingResponse
     */
    public function getPartnerOrgsOrgIdSelfBilling(string $orgId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/orgs/' . self::seg($orgId) . '/self-billing', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get my reputation passport. GET /v1/partner/passport
     *
     * A signed, portable passport of the partner's verified performance across every program (programs, eligible clicks, referrals, repeat-payer rate, average quality), valid for 90 days.
     *
     * **Auth:** a partner session.
     * @return Passport
     */
    public function getPartnerPassport(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/passport', [], null, $idempotencyKey, 'json');
    }

    /**
     * List my payouts. GET /v1/partner/payouts
     *
     * The partner's payouts across merchants, newest first.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerPayoutsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerPayouts(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/payouts', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerPayouts()}, following the pages.
     * @return \Generator<int, GetPartnerPayoutsResponseDataItem>
     */
    public function getPartnerPayoutsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerPayouts(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get my payout invoice. GET /v1/partner/payouts/{id}/invoice
     *
     * The invoice for one of the partner's payouts, as JSON or (`format=html`) a printable page.
     *
     * **Auth:** a partner session.
     * @return Invoice
     */
    public function getPartnerPayoutsIdInvoice(string $id, ?string $format = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/payouts/' . self::seg($id) . '/invoice', ['format' => $format], null, $idempotencyKey, 'json');
    }

    /**
     * List my postback calls. GET /v1/partner/postback-logs
     *
     * Recent postback calls with the topic, URL and the status code the partner's server answered.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerPostbackLogsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerPostbackLogs(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/postback-logs', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerPostbackLogs()}, following the pages.
     * @return \Generator<int, GetPartnerPostbackLogsResponseDataItem>
     */
    public function getPartnerPostbackLogsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerPostbackLogs(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get my creator profile. GET /v1/partner/profile
     *
     * The partner's creator profile (headline, bio, channels, audience, engagement) and verified stats.
     *
     * **Auth:** a partner session.
     * @return CreatorProfile
     */
    public function getPartnerProfile(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/profile', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get my verified performance. GET /v1/partner/profile/verified
     *
     * The partner's performance across all programs, computed by the platform from the ledger rather than self-reported: programs, eligible clicks, active referrals and repeat-payer rate.
     *
     * **Auth:** a partner session.
     * @return GetPartnerProfileVerifiedResponse
     */
    public function getPartnerProfileVerified(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/profile/verified', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a program leaderboard. GET /v1/partner/programs/{programId}/leaderboard
     *
     * Top 25 partners by approved commission in the program (during the active contest, if any). Other partners' names are masked; the partner's own row is marked `you`. 403 when the program has no leaderboard.
     *
     * **Auth:** a partner session.
     * @return GetPartnerProgramsProgramIdLeaderboardResponse
     */
    public function getPartnerProgramsProgramIdLeaderboard(string $programId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/programs/' . self::seg($programId) . '/leaderboard', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get my recruiting link. GET /v1/partner/recruit
     *
     * The partner's recruit code and sign-up URL. Partners who sign up through it become their sub-affiliates where both partner the same merchant.
     *
     * **Auth:** a partner session.
     * @return GetPartnerRecruitResponse
     */
    public function getPartnerRecruit(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/recruit', [], null, $idempotencyKey, 'json');
    }

    /**
     * List my referrals. GET /v1/partner/referrals
     *
     * The partner's referrals across merchants, newest first. Customer ids are redacted to their last 4 characters.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerReferralsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerReferrals(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/referrals', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerReferrals()}, following the pages.
     * @return \Generator<int, GetPartnerReferralsResponseDataItem>
     */
    public function getPartnerReferralsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerReferrals(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Explain a referral. GET /v1/partner/referrals/{id}/transparency
     *
     * Why a referral credited the partner (or did not fully): the model, window, touchpoints considered, the partner's share of the credit and the reasoning notes. No customer data.
     *
     * **Auth:** a partner session.
     * @return GetPartnerReferralsIdTransparencyResponse
     */
    public function getPartnerReferralsIdTransparency(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/referrals/' . self::seg($id) . '/transparency', [], null, $idempotencyKey, 'json');
    }

    /**
     * List partners. GET /v1/partners
     *
     * Partners, newest first. Filter by `email`, `externalRef` or `status`. Archived partners are hidden unless you ask for them with `status=archived` or `includeArchived=true`.
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Partner>, has_more: bool, next_cursor: string|null}
     */
    public function getPartners(?string $email = null, ?string $externalRef = null, ?string $status = null, ?string $includeArchived = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partners', ['email' => $email, 'externalRef' => $externalRef, 'status' => $status, 'includeArchived' => $includeArchived, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartners()}, following the pages.
     * @return \Generator<int, Partner>
     */
    public function getPartnersEach(?string $email = null, ?string $externalRef = null, ?string $status = null, ?string $includeArchived = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartners(email: $email, externalRef: $externalRef, status: $status, includeArchived: $includeArchived, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get my security settings. GET /v1/partner/security
     *
     * Whether two-factor sign-in is on for the partner account.
     *
     * **Auth:** a partner session.
     * @return GetPartnerSecurityResponse
     */
    public function getPartnerSecurity(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/security', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a partner. GET /v1/partners/{id}
     *
     * One partner, with a cross-network warning when the same account is flagged or banned by other merchants (it never says which).
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session of any role.
     * @return GetPartnersIdResponse
     */
    public function getPartnersId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partners/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a partner's balances. GET /v1/partners/{id}/balances
     *
     * The partner's commission balances per currency: pending (in hold), approved (payable), paid and reversed.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Balance>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnersIdBalances(string $id, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partners/' . self::seg($id) . '/balances', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnersIdBalances()}, following the pages.
     * @return \Generator<int, Balance>
     */
    public function getPartnersIdBalancesEach(string $id, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnersIdBalances(id: $id, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List a partner's enrollments. GET /v1/partners/{id}/enrollments
     *
     * The programs a partner is enrolled in or applied to, with status and group.
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnersIdEnrollmentsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnersIdEnrollments(string $id, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partners/' . self::seg($id) . '/enrollments', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnersIdEnrollments()}, following the pages.
     * @return \Generator<int, GetPartnersIdEnrollmentsResponseDataItem>
     */
    public function getPartnersIdEnrollmentsEach(string $id, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnersIdEnrollments(id: $id, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a partner's payout profile. GET /v1/partners/{id}/payout-profile
     *
     * The partner's payout method, currency, threshold and tax form status. Method details are not returned. 404 when none is set.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session of any role.
     * @return PayoutProfile
     */
    public function getPartnersIdPayoutProfile(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partners/' . self::seg($id) . '/payout-profile', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a partner's quality score. GET /v1/partners/{id}/quality
     *
     * The partner's quality score computed now (with its metrics) and the last stored snapshot.
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session of any role.
     * @return GetPartnersIdQualityResponse
     */
    public function getPartnersIdQuality(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partners/' . self::seg($id) . '/quality', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get my stats. GET /v1/partner/stats
     *
     * Per merchant: eligible clicks, active referrals, payments and commission balances.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerStatsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerStats(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/stats', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerStats()}, following the pages.
     * @return \Generator<int, GetPartnerStatsResponseDataItem>
     */
    public function getPartnerStatsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerStats(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List my tax documents. GET /v1/partner/tax-documents
     *
     * Tax forms delivered to the partner by every merchant they work with, newest year first.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerTaxDocumentsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerTaxDocuments(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/tax-documents', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerTaxDocuments()}, following the pages.
     * @return \Generator<int, GetPartnerTaxDocumentsResponseDataItem>
     */
    public function getPartnerTaxDocumentsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerTaxDocuments(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get my tax document. GET /v1/partner/tax-documents/{id}
     *
     * The recipient copy of a delivered tax form, as an HTML page.
     *
     * **Auth:** a partner session.
     * @return string
     */
    public function getPartnerTaxDocumentsId(string $id, ?string $idempotencyKey = null): string
    {
        return $this->request('GET', '/v1/partner/tax-documents/' . self::seg($id) . '', [], null, $idempotencyKey, 'text');
    }

    /**
     * List program terms. GET /v1/partner/terms
     *
     * The latest terms version of each program the partner is approved in, and whether they accepted it.
     *
     * **Auth:** a partner session.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPartnerTermsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPartnerTerms(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/partner/terms', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPartnerTerms()}, following the pages.
     * @return \Generator<int, GetPartnerTermsResponseDataItem>
     */
    public function getPartnerTermsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPartnerTerms(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the passport signing key. GET /v1/passport/public-key
     *
     * The ed25519 public key partner passports are signed with, so anyone can verify one offline.
     *
     * **Auth:** none.
     * @return GetPassportPublicKeyResponse
     */
    public function getPassportPublicKey(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/passport/public-key', [], null, $idempotencyKey, 'json');
    }

    /**
     * List payout provider connections. GET /v1/payout-connections
     *
     * The payout providers the org connected with its own credentials (PayPal, Stripe, Circle, Wise, Payoneer, Tremendous), with environment and status. Secrets are never returned.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session with role `owner`, `admin`, `finance`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetPayoutConnectionsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getPayoutConnections(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/payout-connections', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPayoutConnections()}, following the pages.
     * @return \Generator<int, GetPayoutConnectionsResponseDataItem>
     */
    public function getPayoutConnectionsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPayoutConnections(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List payout runs. GET /v1/payout-runs
     *
     * Payout runs, newest first, with their status and summary.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<PayoutRun>, has_more: bool, next_cursor: string|null}
     */
    public function getPayoutRuns(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/payout-runs', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPayoutRuns()}, following the pages.
     * @return \Generator<int, PayoutRun>
     */
    public function getPayoutRunsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPayoutRuns(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List payouts. GET /v1/payouts
     *
     * Individual payouts, newest first, with rail, provider reference and failure reason. Filter with `partnerId`.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Payout>, has_more: bool, next_cursor: string|null}
     */
    public function getPayouts(?string $partnerId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/payouts', ['partnerId' => $partnerId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPayouts()}, following the pages.
     * @return \Generator<int, Payout>
     */
    public function getPayoutsEach(?string $partnerId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPayouts(partnerId: $partnerId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a payout's invoice. GET /v1/payouts/{id}/invoice
     *
     * The self-billing invoice issued for a payout, as JSON or (`format=html`) a printable page. 404 when the payout has no invoice.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session of any role.
     * @return Invoice
     */
    public function getPayoutsIdInvoice(string $id, ?string $format = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/payouts/' . self::seg($id) . '/invoice', ['format' => $format], null, $idempotencyKey, 'json');
    }

    /**
     * List public plans. GET /v1/plans
     *
     * The public plan catalog in display order: monthly price in minor units (USD, billed monthly in advance), limits and features. No authentication; cacheable for an hour. No plan charges a transaction or payout fee.
     *
     * **Auth:** none.
     * @return GetPlansResponse
     */
    public function getPlans(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/plans', [], null, $idempotencyKey, 'json');
    }

    /**
     * What a merchant's portal sign-in offers. GET /v1/portal-auth/current
     *
     * For the portal's sign-in page: the org (from `org`, or the merchant's portal domain this is called on) and its partner sign-in adapter, with the button label and where it starts. `referalli` with no start URL when the org uses Referalli partner accounts.
     *
     * **Auth:** none.
     * @return GetPortalAuthCurrentResponse
     */
    public function getPortalAuthCurrent(?string $org = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/portal-auth/current', ['org' => $org], null, $idempotencyKey, 'json');
    }

    /**
     * List DSAR tool requests. GET /v1/privacy/executor-requests
     *
     * The last 200 requests connected DSAR tools sent: operation, outcome and the vendor request id. Subjects are kept only as hashes.
     *
     * **Auth:** an API key with `privacy:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetPrivacyExecutorRequestsResponse
     */
    public function getPrivacyExecutorRequests(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/privacy/executor-requests', [], null, $idempotencyKey, 'json');
    }

    /**
     * List connected DSAR tools. GET /v1/privacy/executors
     *
     * Every DSAR tool that can reach Referalli as a connected system (Cookie Munch cm-standard-v1, OneTrust, Transcend, DataGrail, Ketch, Osano, `custom` for any tool speaking Standard Webhooks), with the per-org URL to register, install steps and a health check. Keys are never returned.
     *
     * **Auth:** an API key with `privacy:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetPrivacyExecutorsResponse
     */
    public function getPrivacyExecutors(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/privacy/executors', [], null, $idempotencyKey, 'json');
    }

    /**
     * Export a customer's data. GET /v1/privacy/export
     *
     * Every stored row that references the customer, for a data-subject access request.
     *
     * **Auth:** an API key with `privacy:read` (or `full`), or a session with role `owner`, `admin`.
     * @return CustomerExport
     */
    public function getPrivacyExport(string $customerRef, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/privacy/export', ['customerRef' => $customerRef], null, $idempotencyKey, 'json');
    }

    /**
     * List data-subject requests. GET /v1/privacy/requests
     *
     * Access and erasure requests, newest first, with their status.
     *
     * **Auth:** an API key with `privacy:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<PrivacyRequest>, has_more: bool, next_cursor: string|null}
     */
    public function getPrivacyRequests(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/privacy/requests', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPrivacyRequests()}, following the pages.
     * @return \Generator<int, PrivacyRequest>
     */
    public function getPrivacyRequestsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPrivacyRequests(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a data-subject request. GET /v1/privacy/requests/{id}
     *
     * Poll one request: `pending`, `completed` or `failed`, and whether data was found.
     *
     * **Auth:** an API key with `privacy:read` (or `full`), or a session with role `owner`, `admin`.
     * @return PrivacyRequest
     */
    public function getPrivacyRequestsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/privacy/requests/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a data-subject request result. GET /v1/privacy/requests/{id}/result
     *
     * The full result of a completed request; for access requests, the exported data. 400 until it is completed.
     *
     * **Auth:** an API key with `privacy:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetPrivacyRequestsIdResultResponse
     */
    public function getPrivacyRequestsIdResult(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/privacy/requests/' . self::seg($id) . '/result', [], null, $idempotencyKey, 'json');
    }

    /**
     * List product margins. GET /v1/profitability/products
     *
     * The margin catalog: per product, a margin (bps) or a unit cost, used to turn revenue into profit.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetProfitabilityProductsResponse
     */
    public function getProfitabilityProducts(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/profitability/products', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a product margin. GET /v1/profitability/products/{productRef}
     *
     * One product of the margin catalog.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetProfitabilityProductsProductRefResponse
     */
    public function getProfitabilityProductsProductRef(string $productRef, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/profitability/products/' . self::seg($productRef) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a rebuild job. GET /v1/profitability/rebuild/{jobId}
     *
     * Progress of a rebuild: `queued`, `running`, `done` or `failed` (a job untouched for an hour reports `failed` with `error: "stale"`), with processed and total counts.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetProfitabilityRebuildJobIdResponse
     */
    public function getProfitabilityRebuildJobId(string $jobId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/profitability/rebuild/' . self::seg($jobId) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get profitability settings. GET /v1/profitability/settings
     *
     * The economics credit ROI is computed with: reporting currency, default margin, how a credit's cost is modelled, how credit use is inferred, attribution and churn windows, target ROI and more. With `programId`, the program's overrides merged over the org's.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetProfitabilitySettingsResponse
     */
    public function getProfitabilitySettings(?string $programId = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/profitability/settings', ['programId' => $programId], null, $idempotencyKey, 'json');
    }

    /**
     * List programs. GET /v1/programs
     *
     * The org's programs, oldest first, with their settings.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Program>, has_more: bool, next_cursor: string|null}
     */
    public function getPrograms(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getPrograms()}, following the pages.
     * @return \Generator<int, Program>
     */
    public function getProgramsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getPrograms(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a program. GET /v1/programs/{id}
     *
     * One program with its settings (defaults filled in) and public page.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     * @return Program
     */
    public function getProgramsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get autopricing settings. GET /v1/programs/{id}/autopricing
     *
     * The program's autopricing configuration, or `null` when it's off.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     * @return GetProgramsIdAutopricingResponse
     */
    public function getProgramsIdAutopricing(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '/autopricing', [], null, $idempotencyKey, 'json');
    }

    /**
     * List program enrollments. GET /v1/programs/{id}/enrollments
     *
     * The program's enrollments and applications, newest first, each with the partner and a cross-network warning when other merchants banned the same account. Filter with `status`.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetProgramsIdEnrollmentsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getProgramsIdEnrollments(string $id, ?string $status = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '/enrollments', ['status' => $status, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getProgramsIdEnrollments()}, following the pages.
     * @return \Generator<int, GetProgramsIdEnrollmentsResponseDataItem>
     */
    public function getProgramsIdEnrollmentsEach(string $id, ?string $status = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getProgramsIdEnrollments(id: $id, status: $status, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the referral tree. GET /v1/programs/{id}/graph
     *
     * Who referred whom from one partner (`root`) down, with revenue and net commission per node. Where customers are partners too (customerRef equals a partner's externalRef), the tree continues up to `depth` partner levels. Stops at 5,000 referrals and says so.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     * @return GetProgramsIdGraphResponse
     */
    public function getProgramsIdGraph(string $id, string $root, ?int $depth = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '/graph', ['root' => $root, 'depth' => $depth], null, $idempotencyKey, 'json');
    }

    /**
     * List partner groups. GET /v1/programs/{id}/groups
     *
     * The program's partner groups with member counts. Archived groups are hidden unless `includeArchived=true`.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     *
     * includeArchived: true: include archived groups.
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<PartnerGroup>, has_more: bool, next_cursor: string|null}
     */
    public function getProgramsIdGroups(string $id, ?string $includeArchived = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '/groups', ['includeArchived' => $includeArchived, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getProgramsIdGroups()}, following the pages.
     * @return \Generator<int, PartnerGroup>
     */
    public function getProgramsIdGroupsEach(string $id, ?string $includeArchived = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getProgramsIdGroups(id: $id, includeArchived: $includeArchived, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the agent negotiation policy. GET /v1/programs/{id}/negotiation-policy
     *
     * The program's negotiation policy, or `null` when it isn't open to negotiation.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     * @return GetProgramsIdNegotiationPolicyResponse
     */
    public function getProgramsIdNegotiationPolicy(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '/negotiation-policy', [], null, $idempotencyKey, 'json');
    }

    /**
     * List promotions. GET /v1/programs/{id}/promotions
     *
     * The program's promotions, latest start first.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Promotion>, has_more: bool, next_cursor: string|null}
     */
    public function getProgramsIdPromotions(string $id, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '/promotions', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getProgramsIdPromotions()}, following the pages.
     * @return \Generator<int, Promotion>
     */
    public function getProgramsIdPromotionsEach(string $id, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getProgramsIdPromotions(id: $id, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the referee reward. GET /v1/programs/{id}/referee-reward
     *
     * The program's reward for referred customers (the friend's side of a double-sided program), or `null` when it has none.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     * @return GetProgramsIdRefereeRewardResponse
     */
    public function getProgramsIdRefereeReward(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '/referee-reward', [], null, $idempotencyKey, 'json');
    }

    /**
     * List terms acceptances. GET /v1/programs/{id}/terms-acceptances
     *
     * Which partner accepted which version of the program's terms, newest first.
     *
     * **Auth:** an API key with `programs:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetProgramsIdTermsAcceptancesResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getProgramsIdTermsAcceptances(string $id, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/programs/' . self::seg($id) . '/terms-acceptances', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getProgramsIdTermsAcceptances()}, following the pages.
     * @return \Generator<int, GetProgramsIdTermsAcceptancesResponseDataItem>
     */
    public function getProgramsIdTermsAcceptancesEach(string $id, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getProgramsIdTermsAcceptances(id: $id, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List prospects. GET /v1/prospects
     *
     * Prospects, best fit first, with channel, audience, evidence and outreach status. Filter with `status`.
     *
     * **Auth:** an API key with `growth:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetProspectsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getProspects(?string $status = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/prospects', ['status' => $status, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getProspects()}, following the pages.
     * @return \Generator<int, GetProspectsResponseDataItem>
     */
    public function getProspectsEach(?string $status = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getProspects(status: $status, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a program's public page. GET /v1/public/programs/{handle}
     *
     * What a program's public join page shows: the program and merchant names, pitch, cookie window, terms, base commission, branding and whether joining is approved at once. No authentication; only active live programs with a `publicHandle` are found.
     *
     * **Auth:** none.
     * @return GetPublicProgramsHandleResponse
     */
    public function getPublicProgramsHandle(string $handle, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/public/programs/' . self::seg($handle) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List referrals. GET /v1/referrals
     *
     * Referrals, newest first, filtered by `programId`, `partnerId`, `status` or `customerRef`.
     *
     * **Auth:** an API key with `referrals:read` (or `full`), or a session of any role.
     *
     * customerRef: Your id for the referred customer.
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Referral>, has_more: bool, next_cursor: string|null}
     */
    public function getReferrals(?string $programId = null, ?string $partnerId = null, ?string $status = null, ?string $customerRef = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/referrals', ['programId' => $programId, 'partnerId' => $partnerId, 'status' => $status, 'customerRef' => $customerRef, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getReferrals()}, following the pages.
     * @return \Generator<int, Referral>
     */
    public function getReferralsEach(?string $programId = null, ?string $partnerId = null, ?string $status = null, ?string $customerRef = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getReferrals(programId: $programId, partnerId: $partnerId, status: $status, customerRef: $customerRef, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a referral. GET /v1/referrals/{id}
     *
     * One referral with its touch credits and attribution reasoning.
     *
     * **Auth:** an API key with `referrals:read` (or `full`), or a session of any role.
     * @return Referral
     */
    public function getReferralsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/referrals/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the attribution journey. GET /v1/referrals/{id}/journey
     *
     * The referral with every touchpoint considered: each click's time, URL, fraud score, eligibility, credit weight and which one won.
     *
     * **Auth:** an API key with `referrals:read` (or `full`), or a session of any role.
     * @return GetReferralsIdJourneyResponse
     */
    public function getReferralsIdJourney(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/referrals/' . self::seg($id) . '/journey', [], null, $idempotencyKey, 'json');
    }

    /**
     * Report filtered clicks. GET /v1/reports/filtered-clicks
     *
     * Per day, newest first: total clicks, clicks excluded from attribution (bots, rate limits, invalid traffic) and the average fraud score.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetReportsFilteredClicksResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getReportsFilteredClicks(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/reports/filtered-clicks', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getReportsFilteredClicks()}, following the pages.
     * @return \Generator<int, GetReportsFilteredClicksResponseDataItem>
     */
    public function getReportsFilteredClicksEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getReportsFilteredClicks(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get partner performance. GET /v1/reports/partner-performance
     *
     * Per partner, highest revenue first: clicks, referrals, payments, referred revenue, commission earned and reversed. `format=csv` returns the same as a CSV file.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * format: csv: the same rows as a CSV file.
     * @return GetReportsPartnerPerformanceResponse
     */
    public function getReportsPartnerPerformance(?string $format = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/reports/partner-performance', ['format' => $format], null, $idempotencyKey, 'json');
    }

    /**
     * List issued referee rewards. GET /v1/rewards
     *
     * Rewards issued to referred customers, newest first, with code and status (`issued`, `redeemed`, `void`). Filter with `status`.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetRewardsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getRewards(?string $status = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/rewards', ['status' => $status, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getRewards()}, following the pages.
     * @return \Generator<int, GetRewardsResponseDataItem>
     */
    public function getRewardsEach(?string $status = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getRewards(status: $status, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List partner rewards. GET /v1/rewards/granted
     *
     * The last 200 rewards granted through `POST /v1/rewards`, with the commission line each one posted.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     * @return GetRewardsGrantedResponse
     */
    public function getRewardsGranted(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/rewards/granted', [], null, $idempotencyKey, 'json');
    }

    /**
     * Look up a reward code. GET /v1/rewards/lookup/{code}
     *
     * Whether a reward code is valid (issued and unredeemed), with its kind and amount, so your checkout can apply it. Unknown codes answer `{ "valid": false }`.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     * @return GetRewardsLookupCodeResponse
     */
    public function getRewardsLookupCode(string $code, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/rewards/lookup/' . self::seg($code) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List reward rules. GET /v1/rewards/rules
     *
     * Your rules that turn an inbound event (or a rule key) into a fixed partner reward.
     *
     * **Auth:** an API key with `commissions:read` (or `full`), or a session of any role.
     * @return list<PutRewardsRulesKeyResponse>
     */
    public function getRewardsRules(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/rewards/rules', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get the ROI breakdown. GET /v1/roi/breakdown
     *
     * The summary figures grouped `by` program, partner, cohort (grant month), source or role, best ROI first (cohorts in date order). Partner and program rows also carry their referrals' combined figures. `from`/`to` select grants by grant date (a date covers its whole UTC day), `programId` and `partnerId` narrow them, `windowDays` overrides each program's attribution window (30, 90, 180, 365, or 0 for lifetime), and `currency` views one native currency instead of the reporting currency. `format=csv` returns the same as a CSV file.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * from: Grants (or referrals) from this instant or date, inclusive.
     * to: Up to this instant, or through the end of this date (UTC), inclusive.
     * partnerId: The grant's partner: the referrer, or the partner of the referee's referral.
     * windowDays: Attribution window; default each program's setting. 0 = lifetime.
     * currency: Default the reporting currency (converted); another code gives that currency only.
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetRoiBreakdownResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getRoiBreakdown(string $by, ?string $from = null, ?string $to = null, ?string $programId = null, ?string $partnerId = null, ?int $windowDays = null, ?string $currency = null, ?string $format = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/roi/breakdown', ['from' => $from, 'to' => $to, 'programId' => $programId, 'partnerId' => $partnerId, 'windowDays' => $windowDays, 'currency' => $currency, 'format' => $format, 'by' => $by, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getRoiBreakdown()}, following the pages.
     * @return \Generator<int, GetRoiBreakdownResponseDataItem>
     */
    public function getRoiBreakdownEach(string $by, ?string $from = null, ?string $to = null, ?string $programId = null, ?string $partnerId = null, ?int $windowDays = null, ?string $currency = null, ?string $format = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getRoiBreakdown(by: $by, from: $from, to: $to, programId: $programId, partnerId: $partnerId, windowDays: $windowDays, currency: $currency, format: $format, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get ROI data quality. GET /v1/roi/data-quality
     *
     * How complete the inputs to ROI are over `from`/`to`: payments with credit-applied info, products with a margin, partners linked to their own customer id, events excluded for a missing FX rate, and a list of gaps with how to fix each.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * from: Grants (or referrals) from this instant or date, inclusive.
     * to: Up to this instant, or through the end of this date (UTC), inclusive.
     * @return GetRoiDataQualityResponse
     */
    public function getRoiDataQuality(?string $from = null, ?string $to = null, ?string $format = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/roi/data-quality', ['from' => $from, 'to' => $to, 'format' => $format], null, $idempotencyKey, 'json');
    }

    /**
     * List credit grants. GET /v1/roi/grants
     *
     * Each credit grant in view with its status (`open`, `used`, `expired`, `revoked`) and figures, newest first. Filter by `status`, `role` (`referee` or `referrer`) and `paidBack`. `from`/`to` select grants by grant date (a date covers its whole UTC day), `programId` and `partnerId` narrow them, `windowDays` overrides each program's attribution window (30, 90, 180, 365, or 0 for lifetime), and `currency` views one native currency instead of the reporting currency. `format=csv` returns the same as a CSV file. CSV returns every grant, unpaged.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * from: Grants (or referrals) from this instant or date, inclusive.
     * to: Up to this instant, or through the end of this date (UTC), inclusive.
     * partnerId: The grant's partner: the referrer, or the partner of the referee's referral.
     * windowDays: Attribution window; default each program's setting. 0 = lifetime.
     * currency: Default the reporting currency (converted); another code gives that currency only.
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<RoiGrant>, has_more: bool, next_cursor: string|null}
     */
    public function getRoiGrants(?string $from = null, ?string $to = null, ?string $programId = null, ?string $partnerId = null, ?int $windowDays = null, ?string $currency = null, ?string $format = null, ?string $status = null, ?string $role = null, ?string $paidBack = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/roi/grants', ['from' => $from, 'to' => $to, 'programId' => $programId, 'partnerId' => $partnerId, 'windowDays' => $windowDays, 'currency' => $currency, 'format' => $format, 'status' => $status, 'role' => $role, 'paidBack' => $paidBack, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getRoiGrants()}, following the pages.
     * @return \Generator<int, RoiGrant>
     */
    public function getRoiGrantsEach(?string $from = null, ?string $to = null, ?string $programId = null, ?string $partnerId = null, ?int $windowDays = null, ?string $currency = null, ?string $format = null, ?string $status = null, ?string $role = null, ?string $paidBack = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getRoiGrants(from: $from, to: $to, programId: $programId, partnerId: $partnerId, windowDays: $windowDays, currency: $currency, format: $format, status: $status, role: $role, paidBack: $paidBack, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Trace a partner's value. GET /v1/roi/partners/{id}/trace
     *
     * The same trace for a partner's own customer identity (through their externalRef).
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * windowDays: Attribution window; default each program's setting. 0 = lifetime.
     * @return RoiTrace
     */
    public function getRoiPartnersIdTrace(string $id, ?int $windowDays = null, ?string $format = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/roi/partners/' . self::seg($id) . '/trace', ['windowDays' => $windowDays, 'format' => $format], null, $idempotencyKey, 'json');
    }

    /**
     * List value patterns. GET /v1/roi/patterns
     *
     * Every value pattern from one detection run, with the matching subjects: `credit_only` (a referee used their credit and paid no cash after within the window), `churn_at_exhaustion` (used it up, paid, then stopped), `bonus_collector` (a partner holding commission credit who never spends their own cash) and `negative_partner` (a partner whose referrals net below zero). Matches wait until the evidence is in, so young customers are never flagged.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetRoiPatternsResponse
     */
    public function getRoiPatterns(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/roi/patterns', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get a value pattern. GET /v1/roi/patterns/{pattern}
     *
     * The subjects currently matching one pattern, with the detail of each match.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<RoiPatternEntry>, has_more: bool, next_cursor: string|null}
     */
    public function getRoiPatternsPattern(string $pattern, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/roi/patterns/' . self::seg($pattern) . '', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getRoiPatternsPattern()}, following the pages.
     * @return \Generator<int, RoiPatternEntry>
     */
    public function getRoiPatternsPatternEach(string $pattern, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getRoiPatternsPattern(pattern: $pattern, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the ROI summary. GET /v1/roi/summary
     *
     * Credit ROI for the grants in view: credit cost, cash and profit from the recipients after each grant, net, ROI, payback share and median days, outstanding credit and how much of it is measured rather than inferred. With `programId`, also status against the program's target ROI. `model=incremental` adds the lift against the program's holdout group; `includeProjection=true` adds the expected payback of open grants. `from`/`to` select grants by grant date (a date covers its whole UTC day), `programId` and `partnerId` narrow them, `windowDays` overrides each program's attribution window (30, 90, 180, 365, or 0 for lifetime), and `currency` views one native currency instead of the reporting currency. `format=csv` returns the same as a CSV file.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * from: Grants (or referrals) from this instant or date, inclusive.
     * to: Up to this instant, or through the end of this date (UTC), inclusive.
     * partnerId: The grant's partner: the referrer, or the partner of the referee's referral.
     * windowDays: Attribution window; default each program's setting. 0 = lifetime.
     * currency: Default the reporting currency (converted); another code gives that currency only.
     * model: naive (default): ROI of every grant. incremental: also `incremental`, the program's credit-caused lift against its recorded holdout (requires programId; reporting currency; from/to select referrals by first qualifying payment).
     * includeProjection: true: also `projection`, the expected payback of the open grants in view from their program-and-role cohort's median curve (labelled 'projection'; needs 50 closed grants per cohort).
     * @return RoiSummary
     */
    public function getRoiSummary(?string $from = null, ?string $to = null, ?string $programId = null, ?string $partnerId = null, ?int $windowDays = null, ?string $currency = null, ?string $format = null, ?string $model = null, ?string $includeProjection = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/roi/summary', ['from' => $from, 'to' => $to, 'programId' => $programId, 'partnerId' => $partnerId, 'windowDays' => $windowDays, 'currency' => $currency, 'format' => $format, 'model' => $model, 'includeProjection' => $includeProjection], null, $idempotencyKey, 'json');
    }

    /**
     * Trace a customer's value. GET /v1/roi/trace/{customerRef}
     *
     * Every value event of a customer (and the identities linked to them) in order, with the running net, to see exactly how their ROI was computed. `format=csv` for a file.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     *
     * windowDays: Attribution window; default each program's setting. 0 = lifetime.
     * @return RoiTrace
     */
    public function getRoiTraceCustomerRef(string $customerRef, ?int $windowDays = null, ?string $format = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/roi/trace/' . self::seg($customerRef) . '', ['windowDays' => $windowDays, 'format' => $format], null, $idempotencyKey, 'json');
    }

    /**
     * Get setup progress. GET /v1/setup/status
     *
     * The install checker: which integration steps are done (auth or associate, program and rule, partner, snippet or click, billing, a payable partner, webhooks) and the next steps as hints.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetSetupStatusResponse
     */
    public function getSetupStatus(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/setup/status', [], null, $idempotencyKey, 'json');
    }

    /**
     * Get platform status. GET /v1/status
     *
     * Overall state (`operational`, `degraded` or `major_outage`), each component's health and the open incidents. Cached 30 seconds.
     *
     * **Auth:** none.
     * @return GetStatusResponse
     */
    public function getStatus(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/status', [], null, $idempotencyKey, 'json');
    }

    /**
     * List status incidents. GET /v1/status/incidents
     *
     * Recent incidents, newest first, with their updates.
     *
     * **Auth:** none.
     *
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<Incident>, has_more: bool, next_cursor: string|null}
     */
    public function getStatusIncidents(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/status/incidents', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getStatusIncidents()}, following the pages.
     * @return \Generator<int, Incident>
     */
    public function getStatusIncidentsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getStatusIncidents(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get the incidents feed. GET /v1/status/incidents.atom
     *
     * The 50 most recent incidents as an Atom feed.
     *
     * **Auth:** none.
     * @return string
     */
    public function getStatusIncidentsAtom(?string $idempotencyKey = null): string
    {
        return $this->request('GET', '/v1/status/incidents.atom', [], null, $idempotencyKey, 'text');
    }

    /**
     * Get a status incident. GET /v1/status/incidents/{id}
     *
     * One incident with its updates.
     *
     * **Auth:** none.
     * @return Incident
     */
    public function getStatusIncidentsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/status/incidents/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List support tool connections. GET /v1/support/apps
     *
     * Every support tool Referalli can show referral context in (Chatly cards and AI tools, Intercom, Zendesk, HubSpot, Front, Help Scout, custom), with its card URL, install steps and whether it is set up. Secrets are never returned.
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session with role `owner`, `admin`.
     * @return GetSupportAppsResponse
     */
    public function getSupportApps(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/support/apps', [], null, $idempotencyKey, 'json');
    }

    /**
     * Render a support card for a tool (GET). GET /v1/support/cards/{orgId}/{adapter}
     *
     * The same card for tools that fetch with GET (HubSpot legacy CRM cards pass the contact as query parameters). Signed as for the POST form; 404 otherwise.
     *
     * **Auth:** none.
     * @return PostSupportCardsOrgIdAdapterResponse
     */
    public function getSupportCardsOrgIdAdapter(string $orgId, string $adapter, ?string $email = null, ?string $externalId = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/support/cards/' . self::seg($orgId) . '/' . self::seg($adapter) . '', ['email' => $email, 'externalId' => $externalId], null, $idempotencyKey, 'json');
    }

    /**
     * Get referral context for a support contact. GET /v1/support/context
     *
     * What a support agent should know about a contact: the partner (status, tier, programs, referral link, pending/approved/paid balances, next payout, open flags) and/or the referred customer (who referred them, when, the referee reward and what is left of it). Name the contact by `partnerExternalRef`, `ext` (a tool's verified external id), `customerRef` or `email`; the email is used only when no stronger key is given. Your org's data only; `partner` and `customer` are null when nothing matches.
     *
     * **Auth:** an API key with `partners:read` (or `full`), or a session with role `owner`, `admin`, `support`, `finance`, `analyst`.
     *
     * email: Used only when no stronger key is given.
     * ext: A support tool's verified external id: matched as a partner externalRef, then as a customer ref.
     * @return GetSupportContextResponse
     */
    public function getSupportContext(?string $email = null, ?string $customerRef = null, ?string $partnerExternalRef = null, ?string $ext = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/support/context', ['email' => $email, 'customerRef' => $customerRef, 'partnerExternalRef' => $partnerExternalRef, 'ext' => $ext], null, $idempotencyKey, 'json');
    }

    /**
     * Export 1099-NEC data. GET /v1/tax/1099
     *
     * For each partner with a W-9 on file: the total actually paid in the tax year, in USD at recorded FX rates, and whether a form is required (US$600 or more, or a currency that couldn't be converted, listed in `fxMissingCurrencies` for review).
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session with role `owner`, `admin`, `finance`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetTax1099ResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getTax1099(int $year, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/tax/1099', ['year' => $year, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getTax1099()}, following the pages.
     * @return \Generator<int, GetTax1099ResponseDataItem>
     */
    public function getTax1099Each(int $year, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getTax1099(year: $year, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List 1099 filings. GET /v1/tax/1099/filings
     *
     * A tax year's filings with their provider status and the documents in each.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session with role `owner`, `admin`, `finance`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetTax1099FilingsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getTax1099Filings(int $year, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/tax/1099/filings', ['year' => $year, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getTax1099Filings()}, following the pages.
     * @return \Generator<int, GetTax1099FilingsResponseDataItem>
     */
    public function getTax1099FilingsEach(int $year, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getTax1099Filings(year: $year, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Preview 1099-NEC filings. GET /v1/tax/1099/preview
     *
     * Which partners would get a 1099-NEC for a tax year, with amounts and anything missing (W-9s, TINs), without filing.
     *
     * **Auth:** an API key with `payouts:read` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return NecPreview
     */
    public function getTax1099Preview(int $year, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/tax/1099/preview', ['year' => $year], null, $idempotencyKey, 'json');
    }

    /**
     * Get the test clock. GET /v1/test_clock
     *
     * Test mode only (`409 test_mode_only` otherwise). The test org's current time and how far it has been advanced.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     * @return GetTestClockResponse
     */
    public function getTestClock(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/test_clock', [], null, $idempotencyKey, 'json');
    }

    /**
     * List captured test emails. GET /v1/test/emails
     *
     * Test mode only. Emails the test org would have sent, captured instead of delivered, newest first.
     *
     * **Auth:** an API key with `org:read` (or `full`), or a session of any role.
     *
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<GetTestEmailsResponseDataItem>, has_more: bool, next_cursor: string|null}
     */
    public function getTestEmails(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/test/emails', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getTestEmails()}, following the pages.
     * @return \Generator<int, GetTestEmailsResponseDataItem>
     */
    public function getTestEmailsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getTestEmails(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a value import job. GET /v1/value/import/{jobId}
     *
     * Progress and result of a background import: status, processed and total rows, recorded and duplicate counts and row errors.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @return GetValueImportJobIdResponse
     */
    public function getValueImportJobId(string $jobId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/value/import/' . self::seg($jobId) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List API versions. GET /v1/versions
     *
     * Every API version, newest first, with what changed in it, the latest version and the deprecation policy. Pin a version with the `Referalli-Version` header or on the API key.
     *
     * **Auth:** none.
     * @return GetVersionsResponse
     */
    public function getVersions(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/versions', [], null, $idempotencyKey, 'json');
    }

    /**
     * List webhook deliveries. GET /v1/webhook-deliveries
     *
     * Deliveries to every endpoint, newest first: topic, status (`pending`, `delivered`, `failed`), attempts, the last response code and, while pending, when the next attempt is. Filter with `endpointId`.
     *
     * **Auth:** an API key with `webhooks:read` (or `full`), or a session of any role.
     *
     * endpointId: Only deliveries to this endpoint.
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<WebhookDelivery>, has_more: bool, next_cursor: string|null}
     */
    public function getWebhookDeliveries(?string $endpointId = null, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/webhook-deliveries', ['endpointId' => $endpointId, 'limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getWebhookDeliveries()}, following the pages.
     * @return \Generator<int, WebhookDelivery>
     */
    public function getWebhookDeliveriesEach(?string $endpointId = null, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getWebhookDeliveries(endpointId: $endpointId, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a webhook delivery. GET /v1/webhook-deliveries/{id}
     *
     * One delivery in full: the exact `payload` sent, its `eventId`, and what the endpoint answered last (`lastStatusCode`, the first 2,000 characters of `lastResponseBody`, or `lastError` when there was no response).
     *
     * **Auth:** an API key with `webhooks:read` (or `full`), or a session of any role.
     * @return GetWebhookDeliveriesIdResponse
     */
    public function getWebhookDeliveriesId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/webhook-deliveries/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List webhook endpoints. GET /v1/webhook-endpoints
     *
     * Endpoints with their topics, programs, status (`active`, `paused`, `disabled`), secret-rotation state and failure state. Secrets are never returned.
     *
     * **Auth:** an API key with `webhooks:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<WebhookEndpoint>, has_more: bool, next_cursor: string|null}
     */
    public function getWebhookEndpoints(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/webhook-endpoints', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getWebhookEndpoints()}, following the pages.
     * @return \Generator<int, WebhookEndpoint>
     */
    public function getWebhookEndpointsEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getWebhookEndpoints(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Get a webhook endpoint. GET /v1/webhook-endpoints/{id}
     *
     * One endpoint with its status, rotation and failure state.
     *
     * **Auth:** an API key with `webhooks:read` (or `full`), or a session of any role.
     * @return WebhookEndpoint
     */
    public function getWebhookEndpointsId(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/webhook-endpoints/' . self::seg($id) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * List an endpoint's deliveries. GET /v1/webhook-endpoints/{id}/deliveries
     *
     * What one endpoint was sent, newest first.
     *
     * **Auth:** an API key with `webhooks:read` (or `full`), or a session of any role.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<WebhookDelivery>, has_more: bool, next_cursor: string|null}
     */
    public function getWebhookEndpointsIdDeliveries(string $id, ?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/webhook-endpoints/' . self::seg($id) . '/deliveries', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getWebhookEndpointsIdDeliveries()}, following the pages.
     * @return \Generator<int, WebhookDelivery>
     */
    public function getWebhookEndpointsIdDeliveriesEach(string $id, ?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getWebhookEndpointsIdDeliveries(id: $id, limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * List Zapier trigger events. GET /v1/zapier/events
     *
     * The event keys Zapier triggers can subscribe to.
     *
     * **Auth:** an API key with `integrations:read` (or `full`), or a session of any role.
     * @return GetZapierEventsResponse
     */
    public function getZapierEvents(?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/zapier/events', [], null, $idempotencyKey, 'json');
    }

    /**
     * List Zapier hooks. GET /v1/zapier/hooks
     *
     * Active Zapier REST hook subscriptions, newest first.
     *
     * **Auth:** an API key with `integrations:read` (or `full`), or a session with role `owner`, `admin`.
     *
     * limit: Items per page, 1 to 100 (default 50). From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * starting_after: A cursor: the id of an item (the previous page's `next_cursor`); returns the items after it. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * ending_before: A cursor: returns the items before this item id (the previous page). Not with `starting_after`. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[gte]: Only items created at or after this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * created[lte]: Only items created at or before this time (ISO 8601), on lists of timestamped records. From API version 2026-11-01; ignored under 2026-10-21, where lists are a capped plain array.
     * @return array{object: string, data: list<ZapierHook>, has_more: bool, next_cursor: string|null}
     */
    public function getZapierHooks(?int $limit = null, ?string $startingAfter = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/zapier/hooks', ['limit' => $limit, 'starting_after' => $startingAfter, 'ending_before' => $endingBefore, 'created[gte]' => $createdGte, 'created[lte]' => $createdLte], null, $idempotencyKey, 'list');
    }

    /**
     * Every item of {@see getZapierHooks()}, following the pages.
     * @return \Generator<int, ZapierHook>
     */
    public function getZapierHooksEach(?int $limit = null, ?string $endingBefore = null, ?string $createdGte = null, ?string $createdLte = null, ?string $idempotencyKey = null): \Generator
    {
        return $this->paginate(fn (?string $cursor) => $this->getZapierHooks(limit: $limit, startingAfter: $cursor, endingBefore: $endingBefore, createdGte: $createdGte, createdLte: $createdLte, idempotencyKey: $idempotencyKey));
    }

    /**
     * Poll a Zapier trigger. GET /v1/zapier/triggers/{event}
     *
     * Zapier polling and sample data: the latest `limit` events of that kind, newest first, in the shape the hook delivers. Always a plain array (Zapier's contract), whatever the API version.
     *
     * **Auth:** an API key with `integrations:read` (or `full`), or a session of any role.
     * @return GetZapierTriggersEventResponse
     */
    public function getZapierTriggersEvent(string $event, ?int $limit = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('GET', '/v1/zapier/triggers/' . self::seg($event) . '', ['limit' => $limit], null, $idempotencyKey, 'json');
    }

    /**
     * Edit a status incident. PATCH /v1/admin/status/incidents/{id}
     *
     * Platform admins only. Changes an incident's title, severity, state, body or affected components. Setting `state: "resolved"` stamps `resolvedAt`.
     *
     * **Auth:** a platform admin session.
     * @param PatchAdminStatusIncidentsIdBody $body
     * @return Incident
     */
    public function patchAdminStatusIncidentsId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/admin/status/incidents/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update an API key. PATCH /v1/api-keys/{id}
     *
     * Changes a key's pinned `apiVersion`, `owner` or expiry (`expiresInDays` from now; `null` removes it). Revoked keys are 404. Needs an owner or admin session, or an API key with the `admin` scope. Audited.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session of any role.
     * @param PatchApiKeysIdBody $body
     * @return PatchApiKeysIdResponse
     */
    public function patchApiKeysId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/api-keys/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update an auth connection. PATCH /v1/auth/connections/{id}
     *
     * Pauses or resumes a connection, renames it, changes `autoEnrollUsers` or the destination of auto-created links, or (signed-protocol connections) sets `signatureVersion`: `v2` to require request-line signatures, `v1+v2` to accept both again.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchAuthConnectionsIdBody $body
     * @return PatchAuthConnectionsIdResponse
     */
    public function patchAuthConnectionsId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/auth/connections/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update a billing connection. PATCH /v1/billing/connections/{id}
     *
     * Renames a connection, sets `status` (`paused` makes its webhook URL refuse events until set back to `active`), or sets its product `filter` (`null` removes it). A filter applies to events received from then on. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchBillingConnectionsIdBody $body
     * @return BillingConnection
     */
    public function patchBillingConnectionsId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/billing/connections/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update the organization. PATCH /v1/org
     *
     * Changes the org name, merges keys into `settings` (a free-form map) and turns `payoutKycRequired` on or off. Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchOrgBody $body
     * @return PatchOrgResponse
     */
    public function patchOrg(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/org', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Change a member's role. PATCH /v1/org/members/{userId}
     *
     * Changes a member's role. Only owners change owner roles, and the last owner can't be demoted (409). Audited. Live mode only.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchOrgMembersUserIdBody $body
     * @return PatchOrgMembersUserIdResponse
     */
    public function patchOrgMembersUserId(string $userId, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/org/members/' . self::seg($userId) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update SSO settings. PATCH /v1/org/sso
     *
     * Requires SSO for members on the org's SSO domains (`requireSso`; needs an active connection and the owner signed in through SSO, so nobody is locked out) and maps identity-provider roles to Referalli roles. Owner only. Live mode only.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`.
     * @param PatchOrgSsoBody $body
     * @return PatchOrgSsoResponse
     */
    public function patchOrgSso(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/org/sso', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update a partner group. PATCH /v1/partner-groups/{id}
     *
     * Changes a group's terms, or archives it (`archived: true`); archived groups take no new members.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchPartnerGroupsIdBody $body
     * @return PartnerGroup
     */
    public function patchPartnerGroupsId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/partner-groups/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update a partner. PATCH /v1/partners/{id}
     *
     * Changes the display name, status (`active`, `suspended`, `banned`, `archived`), tags, notes or externalRef (`null` clears it). Suspended partners keep earning but are not paid; banned ones stop attributing. 409 when another partner has the externalRef. Audited.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchPartnersIdBody $body
     * @return Partner
     */
    public function patchPartnersId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/partners/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Change a partner's payout threshold. PATCH /v1/partners/{id}/payout-profile
     *
     * Changes only the minimum balance before a payout (`minThresholdMinor`). 404 when the partner has no profile. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PatchPartnersIdPayoutProfileBody $body
     * @return PatchPartnersIdPayoutProfileResponse
     */
    public function patchPartnersIdPayoutProfile(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/partners/' . self::seg($id) . '/payout-profile', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update a program. PATCH /v1/programs/{id}
     *
     * Changes any program field or setting; omitted fields keep their value, and `publicPage` is merged. Changing `termsMd` records a new terms version. Setting `status` to `paused` or `archived` stops new attribution. `mobileApp` (iOS Team ID and bundle id, Android package and signing-certificate fingerprints) publishes the program's apps in the universal-links and App Links files on the org's link hosts. Audited.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchProgramsIdBody $body
     * @return Program
     */
    public function patchProgramsId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/programs/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Pause or resume a referral. PATCH /v1/referrals/{id}
     *
     * Sets `status` to `paused` (no new commissions) or back to `active`. Only active referrals can be paused and only paused ones resumed (409 otherwise); setting the current status is a no-op. Publishes `referral.paused` or `referral.resumed`. Audited.
     *
     * **Auth:** an API key with `referrals:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchReferralsIdBody $body
     * @return Referral
     */
    public function patchReferralsId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/referrals/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update a webhook endpoint. PATCH /v1/webhook-endpoints/{id}
     *
     * Changes the URL, topics, programs (`null` or `[]` for every program) or legacy signature, or pauses it (`status: "paused"`, deliveries held). Setting `active` re-enables a paused or auto-disabled endpoint: held deliveries resume and the failure clock starts over. `warnings` has `domain_changed` when the URL moves to another host. Audited.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PatchWebhookEndpointsIdBody $body
     * @return PatchWebhookEndpointsIdResponse
     */
    public function patchWebhookEndpointsId(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PATCH', '/v1/webhook-endpoints/' . self::seg($id) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Close your own account. POST /v1/account/close
     *
     * Closes the signed-in merchant user or partner account: every session ends, identity is redacted and commission records stay under a pseudonym. Send `confirm` with the account's email. Refused (409) for an organization's only owner or a partner still owed money. Step-up: `x-totp-code` when two-factor is on, otherwise a sign-in less than 15 minutes old (else 401 `step_up_required`).
     *
     * **Auth:** a partner session.
     * @param PostAccountCloseBody $body
     * @return PostAccountCloseResponse
     */
    public function postAccountClose(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/account/close', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set an organization's plan. POST /v1/admin/orgs/{id}/plan
     *
     * Platform admins only. Moves an org to a plan without checkout.
     *
     * **Auth:** a platform admin session.
     * @param PostAdminOrgsIdPlanBody $body
     * @return PostAdminOrgsIdPlanResponse
     */
    public function postAdminOrgsIdPlan(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/admin/orgs/' . self::seg($id) . '/plan', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Suspend an organization. POST /v1/admin/orgs/{id}/suspend
     *
     * Platform admins only. Suspends an org with a reason; its members and keys get 403 until it's unsuspended.
     *
     * **Auth:** a platform admin session.
     * @param PostAdminOrgsIdSuspendBody $body
     * @return PostAdminOrgsIdSuspendResponse
     */
    public function postAdminOrgsIdSuspend(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/admin/orgs/' . self::seg($id) . '/suspend', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Unsuspend an organization. POST /v1/admin/orgs/{id}/unsuspend
     *
     * Platform admins only. Lifts a suspension.
     *
     * **Auth:** a platform admin session.
     * @return PostAdminOrgsIdUnsuspendResponse
     */
    public function postAdminOrgsIdUnsuspend(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/admin/orgs/' . self::seg($id) . '/unsuspend', [], null, $idempotencyKey, 'json');
    }

    /**
     * Ban a partner account. POST /v1/admin/partner-accounts/{id}/ban
     *
     * Platform admins only. Bans a partner account across the platform and signs it out everywhere.
     *
     * **Auth:** a platform admin session.
     * @return PostAdminPartnerAccountsIdBanResponse
     */
    public function postAdminPartnerAccountsIdBan(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/admin/partner-accounts/' . self::seg($id) . '/ban', [], null, $idempotencyKey, 'json');
    }

    /**
     * Unban a partner account. POST /v1/admin/partner-accounts/{id}/unban
     *
     * Platform admins only. Lifts a platform ban.
     *
     * **Auth:** a platform admin session.
     * @return PostAdminPartnerAccountsIdUnbanResponse
     */
    public function postAdminPartnerAccountsIdUnban(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/admin/partner-accounts/' . self::seg($id) . '/unban', [], null, $idempotencyKey, 'json');
    }

    /**
     * Open a status incident. POST /v1/admin/status/incidents
     *
     * Platform admins only. Opens an incident on the status page (and mirrors it to the hosted status space when configured).
     *
     * **Auth:** a platform admin session.
     * @param PostAdminStatusIncidentsBody $body
     * @return Incident
     */
    public function postAdminStatusIncidents(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/admin/status/incidents', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Post an incident update. POST /v1/admin/status/incidents/{id}/updates
     *
     * Platform admins only. Adds a timestamped update to an incident and moves it to the given state.
     *
     * **Auth:** a platform admin session.
     * @param PostAdminStatusIncidentsIdUpdatesBody $body
     * @return Incident
     */
    public function postAdminStatusIncidentsIdUpdates(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/admin/status/incidents/' . self::seg($id) . '/updates', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Register an AI agent. POST /v1/agents/register
     *
     * Registers (or updates) an AI agent identity, proven by a wallet signature over a nonce from `POST /v1/partner/auth/wallet/nonce`. The nonce is single use and valid for 10 minutes. `instantPayout` pays the agent per outcome on the crypto rail. No API key: the signature is the credential.
     *
     * **Auth:** none.
     * @param PostAgentsRegisterBody $body
     * @return PostAgentsRegisterResponse
     */
    public function postAgentsRegister(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/agents/register', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Scan for anomalies. POST /v1/anomalies/scan
     *
     * Compares the last 24 hours of clicks, sign-ups and revenue with the trailing 7-day average and returns this org's spikes (3x or more) and drops (under 20%). Findings also become notifications; nothing is changed automatically. Also runs hourly.
     *
     * **Auth:** an API key with `analytics:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostAnomaliesScanResponse
     */
    public function postAnomaliesScan(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/anomalies/scan', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create an API key. POST /v1/api-keys
     *
     * Mints a secret key (`rk_live_…` / `rk_test_…`), shown only in this response. `scopes` defaults to `full`; a key can't grant scopes it doesn't hold. `mode` picks live, test or a matching pair of both (`both` returns `{ pairId, live, test }`); a test-mode caller can mint test keys only. `publishable: true` mints a browser-safe `rk_pub_` key limited to `programs:read` and `events:write` from `allowedOrigins`. `apiVersion` pins the key (default: latest). Needs an owner or admin session, or an API key with the `admin` scope. Audited.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session of any role.
     * @param PostApiKeysBody $body
     * @return PostApiKeysResponse
     */
    public function postApiKeys(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/api-keys', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Create a marketing asset. POST /v1/assets
     *
     * Adds a marketing asset (`banner`, `copy`, `video` or `logo`) to a program for its approved partners, or only for one group's members with `groupId`.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostAssetsBody $body
     * @return PostAssetsResponse
     */
    public function postAssets(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/assets', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Replay attribution. POST /v1/attribution/replay
     *
     * Deterministically recomputes attribution for a program's referrals from the recorded clicks and identity links, under its current model. Returns what changed. Audited.
     *
     * **Auth:** an API key with `referrals:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostAttributionReplayBody $body
     * @return PostAttributionReplayResponse
     */
    public function postAttributionReplay(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/attribution/replay', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Receive an OpenID Connect back-channel logout. POST /v1/auth/backchannel-logout
     *
     * The `backchannel_logout_uri` of Referalli's own sign-in client. Takes a form-encoded `logout_token` (OpenID Connect Back-Channel Logout 1.0): verified against the issuer's keys, `aud`, `events`, a fresh `iat`, no `nonce`, and a single-use `jti`; then ends the Referalli sessions for its `sid` (or every session of its `sub`). Answers 503 until the deployment sets IDP_LOGOUT_SYNC=true.
     *
     * **Auth:** none.
     * @param PostAuthBackchannelLogoutBody $body
     * @return PostAuthBackchannelLogoutResponse
     */
    public function postAuthBackchannelLogout(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/backchannel-logout', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Connect an auth platform. POST /v1/auth/connections
     *
     * Connects your sign-up system so new users are attributed server-side without calling associate: `clerk`, `supabase`, `workos` or `generic` receive the platform's user webhooks at the returned URL; `atlas` and `custom` call the signed protocol endpoints under `/v1/auth/connections/{id}/`. `autoEnrollUsers` makes every new user a partner too. Returns the signing secret once. 409 when an Atlas instance already has a connection.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostAuthConnectionsBody $body
     * @return CreatedAuthConnection
     */
    public function postAuthConnections(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Change a user's id (signed protocol). POST /v1/auth/connections/{id}/aliases
     *
     * The app stamped or changed a user's id after the sign-up was filed: referrals and identity move from `fromCustomerRef` to `toCustomerRef`. Publishes `customer.aliased`. Signed with the connection secret in `x-referalli-signature: t=<unix>,v1=…,v2=…` (v2 also signs the request line; once a connection has seen v2 it requires it), with a unique `x-referalli-id` per call. The legacy header names from before the rename are also accepted, for existing integrations. Calls older than 5 minutes, reused ids (`409 replay`), paused connections (`423 connection_paused`) and unknown fields (`422`) are refused.
     *
     * **Auth:** a signature (see above); no API key.
     * @param PostAuthConnectionsIdAliasesBody $body
     * @return PostAuthConnectionsIdAliasesResponse
     */
    public function postAuthConnectionsIdAliases(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/aliases', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Erase a user (signed protocol). POST /v1/auth/connections/{id}/erase
     *
     * The platform deleted a user or fulfilled an erasure request: the customer's referral data and their partner record are erased. An unknown user succeeds with nothing erased. Signed with the connection secret in `x-referalli-signature: t=<unix>,v1=…,v2=…` (v2 also signs the request line; once a connection has seen v2 it requires it), with a unique `x-referalli-id` per call. The legacy header names from before the rename are also accepted, for existing integrations. Calls older than 5 minutes, reused ids (`409 replay`), paused connections (`423 connection_paused`) and unknown fields (`422`) are refused.
     *
     * **Auth:** a signature (see above); no API key.
     * @param PostAuthConnectionsIdEraseBody $body
     * @return PostAuthConnectionsIdEraseResponse
     */
    public function postAuthConnectionsIdErase(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/erase', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Enrol a user as a partner (signed protocol). POST /v1/auth/connections/{id}/partners
     *
     * A user asked to become a partner from the platform, with the code they chose: they are enrolled now (whatever `autoEnrollUsers` says), with a coupon and, when the connection has a destination, a link. 409 when the code is held by someone else. Signed like the other protocol calls (`x-referalli-signature`, `x-referalli-id`).
     *
     * **Auth:** none.
     * @param PostAuthConnectionsIdPartnersBody $body
     * @return PostAuthConnectionsIdPartnersResponse
     */
    public function postAuthConnectionsIdPartners(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/partners', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Test an auth connection (signed protocol). POST /v1/auth/connections/{id}/ping
     *
     * Proves the secret works: returns the connection, its program and org and the server time, to check clock skew. Signed with the connection secret in `x-referalli-signature: t=<unix>,v1=…,v2=…` (v2 also signs the request line; once a connection has seen v2 it requires it), with a unique `x-referalli-id` per call. The legacy header names from before the rename are also accepted, for existing integrations. Calls older than 5 minutes, reused ids (`409 replay`), paused connections (`423 connection_paused`) and unknown fields (`422`) are refused.
     *
     * **Auth:** a signature (see above); no API key.
     * @param array<string, mixed> $body
     * @return PostAuthConnectionsIdPingResponse
     */
    public function postAuthConnectionsIdPing(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/ping', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Revoke the previous auth secret. POST /v1/auth/connections/{id}/revoke-previous-secret
     *
     * Ends the rotation overlap at once: only the newest secret verifies from now on.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostAuthConnectionsIdRevokePreviousSecretResponse
     */
    public function postAuthConnectionsIdRevokePreviousSecret(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/revoke-previous-secret', [], null, $idempotencyKey, 'json');
    }

    /**
     * Rotate an auth connection secret. POST /v1/auth/connections/{id}/rotate-secret
     *
     * Issues a new signing secret, returned once. The previous one keeps verifying for 24 hours, or until revoked.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostAuthConnectionsIdRotateSecretResponse
     */
    public function postAuthConnectionsIdRotateSecret(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/rotate-secret', [], null, $idempotencyKey, 'json');
    }

    /**
     * Report a user signal (signed protocol). POST /v1/auth/connections/{id}/signals
     *
     * A later verdict about a user: `email_verified` releases a hold for an unverified email, `fraud_confirmed` or `self_referral` voids their referral, `banned`/`unbanned` follow on their partner record. `details` is kept as evidence. Signed with the connection secret in `x-referalli-signature: t=<unix>,v1=…,v2=…` (v2 also signs the request line; once a connection has seen v2 it requires it), with a unique `x-referalli-id` per call. The legacy header names from before the rename are also accepted, for existing integrations. Calls older than 5 minutes, reused ids (`409 replay`), paused connections (`423 connection_paused`) and unknown fields (`422`) are refused.
     *
     * **Auth:** a signature (see above); no API key.
     * @param PostAuthConnectionsIdSignalsBody $body
     * @return PostAuthConnectionsIdSignalsResponse
     */
    public function postAuthConnectionsIdSignals(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/signals', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Attribute a new user (signed protocol). POST /v1/auth/connections/{id}/signups
     *
     * The auth platform reports a new user with the referral context captured at sign-up (`referral.code`, or with cookie consent `clickId`/`anonId`) and optional risk signals. The user is attributed (risky sign-ups are held for review), optionally made a partner with their own link, and the answer says why with reason codes. `test: true` or `atlas-test: 1` simulates without storing. Repeating the same user is idempotent. Signed with the connection secret in `x-referalli-signature: t=<unix>,v1=…,v2=…` (v2 also signs the request line; once a connection has seen v2 it requires it), with a unique `x-referalli-id` per call. The legacy header names from before the rename are also accepted, for existing integrations. Calls older than 5 minutes, reused ids (`409 replay`), paused connections (`423 connection_paused`) and unknown fields (`422`) are refused.
     *
     * **Auth:** a signature (see above); no API key.
     * @param PostAuthConnectionsIdSignupsBody $body
     * @return PostAuthConnectionsIdSignupsResponse
     */
    public function postAuthConnectionsIdSignups(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/signups', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update a user (signed protocol). POST /v1/auth/connections/{id}/users
     *
     * The user changed: email and name follow to their partner record, `suspended` suspends it, `deleted` erases. Signed with the connection secret in `x-referalli-signature: t=<unix>,v1=…,v2=…` (v2 also signs the request line; once a connection has seen v2 it requires it), with a unique `x-referalli-id` per call. The legacy header names from before the rename are also accepted, for existing integrations. Calls older than 5 minutes, reused ids (`409 replay`), paused connections (`423 connection_paused`) and unknown fields (`422`) are refused.
     *
     * **Auth:** a signature (see above); no API key.
     * @param PostAuthConnectionsIdUsersBody $body
     * @return PostAuthConnectionsIdUsersResponse
     */
    public function postAuthConnectionsIdUsers(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/' . self::seg($id) . '/users', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Approve a one-click install. POST /v1/auth/connections/install
     *
     * The dashboard's consent step for `GET /v1/oauth/authorize`: `allow` returns the redirect back to the platform with a single-use code (10 minutes) for the chosen program; `deny` returns it with `error=access_denied`. Owner or admin. Audited.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostAuthConnectionsInstallBody $body
     * @return PostAuthConnectionsInstallResponse
     */
    public function postAuthConnectionsInstall(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/connections/install', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Sign out. POST /v1/auth/logout
     *
     * Ends the browser session (and any portal-domain sessions handed off from it) and clears the cookies. Returns the identity provider's `logoutUrl` to end the provider session too, or `null`.
     *
     * **Auth:** none.
     * @return PostAuthLogoutResponse
     */
    public function postAuthLogout(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/auth/logout', [], null, $idempotencyKey, 'json');
    }

    /**
     * Activate a plan directly. POST /v1/billing/activate
     *
     * Moves the org to a plan without checkout: anyone may move to Free (after cancelling a subscription); paid plans only for platform admins or self-hosted deployments (403 otherwise). Owner only. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`.
     * @param PostBillingActivateBody $body
     * @return PostBillingActivateResponse
     */
    public function postBillingActivate(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/billing/activate', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Start a plan checkout. POST /v1/billing/checkout
     *
     * Creates a checkout session for a paid plan and returns its `url` to redirect to. 400 when billing is not configured on this deployment.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostBillingCheckoutBody $body
     * @return PostBillingCheckoutResponse
     */
    public function postBillingCheckout(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/billing/checkout', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Create a billing connection. POST /v1/billing/connections
     *
     * Connects a billing provider (`stripe`, `paddle`, `lemonsqueezy`, `polar`, `chargebee`, `shopify`, `recurly`, `braintree`, `woocommerce`, `bigcommerce` or `generic`) so its payment webhooks become commissions. Returns the `webhookUrl` path to register with the provider and its signing secret (generated unless you pass the provider's own `webhookSecret`); the secret is returned only here. A `filter` (`productIds`, `priceIds`, `skus` and/or exact `metadata`) limits which payments and subscription events earn when one provider account sells several products; the rest are recorded as `ignored_by_filter`. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostBillingConnectionsBody $body
     * @return CreatedBillingConnection
     */
    public function postBillingConnections(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/billing/connections', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Rotate the webhook signing secret. POST /v1/billing/connections/{id}/rotate-secret
     *
     * Generates a new signing secret, returned once. The previous one keeps verifying until `previousSecretExpiresAt` (24 hours). Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostBillingConnectionsIdRotateSecretResponse
     */
    public function postBillingConnectionsIdRotateSecret(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/billing/connections/' . self::seg($id) . '/rotate-secret', [], null, $idempotencyKey, 'json');
    }

    /**
     * Preview the value mapping. POST /v1/billing/connections/{id}/value-mapping/preview
     *
     * Applies the saved mapping (or a draft `mapping`) to a sample `payload` and returns what would be recorded. Writes nothing. A generic-connector body with `events` gets one result per event.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostBillingConnectionsIdValueMappingPreviewBody $body
     * @return ValueMappingPreview
     */
    public function postBillingConnectionsIdValueMappingPreview(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/billing/connections/' . self::seg($id) . '/value-mapping/preview', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Add an internal customer. POST /v1/billing/internal-customers
     *
     * Marks a customer ref (the provider customer id, or the `referalli_customer_ref` it is linked to) as internal: its payments are recorded as `ignored_by_filter` from now on. Idempotent; a repeat updates the note. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostBillingInternalCustomersBody $body
     * @return PostBillingInternalCustomersResponse
     */
    public function postBillingInternalCustomers(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/billing/internal-customers', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Open the subscription portal. POST /v1/billing/portal
     *
     * Returns the `url` of the billing portal where the owner manages or cancels the subscription. 400 before there is a subscription.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostBillingPortalResponse
     */
    public function postBillingPortal(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/billing/portal', [], null, $idempotencyKey, 'json');
    }

    /**
     * Set a custom portal domain. POST /v1/branding/domain
     *
     * Starts serving the partner portal on your own domain (such as `partners.example.com`), in your branding: returns the CNAME and TXT records to add. Needs a plan with custom domains (402 otherwise).
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostBrandingDomainBody $body
     * @return PostBrandingDomainResponse
     */
    public function postBrandingDomain(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/branding/domain', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Verify the portal domain. POST /v1/branding/domain/verify
     *
     * Checks the portal domain's TXT record and CNAME, routes it and reports `provisioning` or `active` as for the link domain.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostBrandingLinkDomainVerifyResponse
     */
    public function postBrandingDomainVerify(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/branding/domain/verify', [], null, $idempotencyKey, 'json');
    }

    /**
     * Set a custom link domain. POST /v1/branding/link-domain
     *
     * Starts using your own domain (such as `go.example.com`) for partner links: returns the CNAME target and the TXT record that proves you control it. Links move onto it once verified. Needs a plan with custom domains (402 otherwise); 409 when the domain is in use.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostBrandingLinkDomainBody $body
     * @return PostBrandingLinkDomainResponse
     */
    public function postBrandingLinkDomain(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/branding/link-domain', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Verify the link domain. POST /v1/branding/link-domain/verify
     *
     * Checks the TXT record and the CNAME. When both are right the domain is routed here; it is `active` once HTTPS answers on it (`provisioning` while the certificate is issued, which finishes on its own). 400 with what is missing otherwise.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostBrandingLinkDomainVerifyResponse
     */
    public function postBrandingLinkDomainVerify(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/branding/link-domain/verify', [], null, $idempotencyKey, 'json');
    }

    /**
     * Start a CLI sign-in. POST /v1/cli/device-codes
     *
     * The CLI `login` command calls this to start a device sign-in: returns a `deviceCode` for polling and a `userCode` for the person to approve at `verificationUri`. Codes expire after 10 minutes. No authentication; limited per IP.
     *
     * **Auth:** none.
     * @param PostCliDeviceCodesBody $body
     * @return PostCliDeviceCodesResponse
     */
    public function postCliDeviceCodes(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/cli/device-codes', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Poll a CLI sign-in. POST /v1/cli/device-codes/token
     *
     * Polled by the CLI every `interval` seconds with its `deviceCode`. Answers `pending`, `expired`, `denied` or `consumed`, or once approved, `approved` with the new API key (returned once). Polling faster than allowed is `429`.
     *
     * **Auth:** none.
     * @param PostCliDeviceCodesTokenBody $body
     * @return PostCliDeviceCodesTokenResponse
     */
    public function postCliDeviceCodesToken(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/cli/device-codes/token', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Approve a CLI sign-in. POST /v1/cli/device-codes/{userCode}/approve
     *
     * Approves the sign-in and mints its API key in this org. `access` picks the scopes: `cli` (webhooks write and read access to the rest, the default), `read` or `full`. Needs a signed-in owner or admin. Audited.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostCliDeviceCodesUserCodeApproveBody $body
     * @return PostCliDeviceCodesUserCodeApproveResponse
     */
    public function postCliDeviceCodesUserCodeApprove(string $userCode, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/cli/device-codes/' . self::seg($userCode) . '/approve', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Deny a CLI sign-in. POST /v1/cli/device-codes/{userCode}/deny
     *
     * Refuses a pending sign-in; the CLI then sees `denied`.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function postCliDeviceCodesUserCodeDeny(string $userCode, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/cli/device-codes/' . self::seg($userCode) . '/deny', [], null, $idempotencyKey, 'json');
    }

    /**
     * Open a CLI event listener. POST /v1/cli/listeners
     *
     * The CLI `listen` command opens a listener for some `topics` (default every topic). Events are queued for it while it polls at least every 2 minutes, and each comes with Standard Webhooks headers signed with the returned `secret`, so the CLI can forward them to a local server.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostCliListenersBody $body
     * @return PostCliListenersResponse
     */
    public function postCliListeners(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/cli/listeners', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Send a test event. POST /v1/cli/trigger
     *
     * The CLI `trigger` command sends a realistic sample event (ids `*_test_…`, `test: true`) to the org's listeners and webhook endpoints. `data` overrides fields of the sample. 400 for a topic with no sample; `GET /v1/cli/topics` lists them.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostCliTriggerBody $body
     * @return PostCliTriggerResponse
     */
    public function postCliTrigger(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/cli/trigger', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Publish a commission rule. POST /v1/commission-rules
     *
     * Publishes a new version of a program's commission rule; the latest version applies to new payments, and past lines keep the version that earned them. A rule has a `base` (percent in basis points, or a fixed amount), what it applies to (gross or net of tax or fees), how long it recurs, a hold before lines can be paid (`holdDays`, default 30), and optional conditions, per-partner/link/product overrides, volume tiers, event bounties, sub-affiliate levels and new-vs-expansion rates. Unknown fields at any depth are rejected. Audited.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostCommissionRulesBody $body
     * @return PostCommissionRulesResponse
     */
    public function postCommissionRules(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/commission-rules', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Approve due commissions. POST /v1/commissions/approve-due
     *
     * Approves every pending line whose hold has elapsed (this also runs on a schedule). Returns how many were approved. Audited.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return PostCommissionsApproveDueResponse
     */
    public function postCommissionsApproveDue(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/commissions/approve-due', [], null, $idempotencyKey, 'json');
    }

    /**
     * Adjust a commission. POST /v1/commissions/{id}/adjust
     *
     * Records an `adjusted` event against an earned line (a correction; the ledger is append-only). `amountMinor` is signed. An adjustment that would take the line below zero is refused unless `allowNegative`. Audited.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostCommissionsIdAdjustBody $body
     * @return PostCommissionsIdAdjustResponse
     */
    public function postCommissionsIdAdjust(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/commissions/' . self::seg($id) . '/adjust', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Settle a commission yourself. POST /v1/commissions/{id}/settle
     *
     * Marks an earned line paid because you credited the partner yourself (for example as store credit), with your `reference`: records `approved` (if it isn't yet) and `paid`, and publishes `commission.settled`. The line never reaches a payout run or the 1099 export. Repeating the same reference returns the original settlement; a line already paid otherwise is 409. Audited.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostCommissionsIdSettleBody $body
     * @return Settlement
     */
    public function postCommissionsIdSettle(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/commissions/' . self::seg($id) . '/settle', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Create a partner contract. POST /v1/contracts
     *
     * A contract offering one partner custom terms (`termsMd`) and `compensation` (percent or fixed) in a program, as a draft or sent at once (`send: true`). When accepted, the compensation becomes a partner override on a new rule version. Audited.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostContractsBody $body
     * @return PostContractsResponse
     */
    public function postContracts(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/contracts', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Send a contract. POST /v1/contracts/{id}/send
     *
     * Sends a draft contract to the partner. 400 when it is not a draft.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @return OkStatus
     */
    public function postContractsIdSend(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/contracts/' . self::seg($id) . '/send', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create a coupon code. POST /v1/coupons
     *
     * Registers a coupon code for a partner in a program, so checkouts that use it attribute to them (coupon codes win over clicks). Codes match case-insensitively and are unique per org (409).
     *
     * **Auth:** an API key with `links:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostCouponsBody $body
     * @return PostCouponsResponse
     */
    public function postCoupons(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/coupons', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Invite a creator. POST /v1/creators/{accountId}/invite
     *
     * Invites a listed creator to a program with an optional message. 400 when they do not accept invitations or were already invited to that program.
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostCreatorsAccountIdInviteBody $body
     * @return PostCreatorsAccountIdInviteResponse
     */
    public function postCreatorsAccountIdInvite(string $accountId, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/creators/' . self::seg($accountId) . '/invite', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Approve a deal. POST /v1/deals/{id}/approve
     *
     * Approves a submitted deal and protects it for the partner for `protectionDays` (default 90). 404 when there's no submitted deal with that id.
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostDealsIdApproveBody $body
     * @return PostDealsIdApproveResponse
     */
    public function postDealsIdApprove(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/deals/' . self::seg($id) . '/approve', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Reject a deal. POST /v1/deals/{id}/reject
     *
     * Rejects a submitted deal.
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostDealsIdRejectResponse
     */
    public function postDealsIdReject(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/deals/' . self::seg($id) . '/reject', [], null, $idempotencyKey, 'json');
    }

    /**
     * Mark a deal won. POST /v1/deals/{id}/won
     *
     * Marks an approved deal won, within its protection window: creates the referral for `customerRef` so the customer's payments earn the partner commission. Publishes `referral.created`.
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostDealsIdWonBody $body
     * @return PostDealsIdWonResponse
     */
    public function postDealsIdWon(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/deals/' . self::seg($id) . '/won', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Ingest prospects. POST /v1/discovery/corpus
     *
     * Adds up to 500 prospects from your own crawl or data source. Raw page `html` is scanned for affiliate footprints (the competitor programs it recognizes) to enrich the evidence; `keywords` scores fit. Duplicate URLs are skipped. Needs a plan with discovery (402 otherwise).
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostDiscoveryCorpusBody $body
     * @return PostDiscoveryCorpusResponse
     */
    public function postDiscoveryCorpus(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/discovery/corpus', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Search for prospective partners. POST /v1/discovery/search
     *
     * Searches the configured corpus for creators and sites matching `keywords` (and `category`), scores their fit and saves them as prospects. Needs a plan with discovery (402 otherwise).
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostDiscoverySearchBody $body
     * @return PostDiscoverySearchResponse
     */
    public function postDiscoverySearch(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/discovery/search', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Resolve a dispute. POST /v1/disputes/{id}/resolve
     *
     * Resolves an open dispute with a `resolution` note, which the partner sees. Publishes `dispute.resolved`. 404 when not open. Audited.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostDisputesIdResolveBody $body
     * @return Ok
     */
    public function postDisputesIdResolve(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/disputes/' . self::seg($id) . '/resolve', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Preview an email. POST /v1/email/preview
     *
     * Renders an event's email with sample values, from the stored template or an unsaved draft.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostEmailPreviewBody $body
     * @return EmailRendered
     */
    public function postEmailPreview(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/email/preview', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Check the sending domain. POST /v1/email/settings/verify-domain
     *
     * Asks the email provider whether the from address's domain is verified for sending, and stores the result. 400 until a provider, key and from address are set.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostEmailSettingsVerifyDomainResponse
     */
    public function postEmailSettingsVerifyDomain(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/email/settings/verify-domain', [], null, $idempotencyKey, 'json');
    }

    /**
     * Send a test email. POST /v1/email/test
     *
     * Sends one email with sample values to `to` through the org's provider. 400 without a provider or when the provider refuses it.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostEmailTestBody $body
     * @return PostEmailTestResponse
     */
    public function postEmailTest(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/email/test', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Mint a partner embed token. POST /v1/embed/tokens
     *
     * A 15-minute token for the partner with this email, for the partner stats web component (`/embed.js`) in your app.
     *
     * **Auth:** an API key with `links:write` (or `full`), or a session of any role.
     * @param PostEmbedTokensBody $body
     * @return PostEmbedTokensResponse
     */
    public function postEmbedTokens(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/embed/tokens', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Resolve a fraud case. POST /v1/fraud/cases/{id}/resolve
     *
     * Closes a case with an `action`: `dismiss` (a held referral is approved), `void_referral`, `suspend_partner` or `ban_partner`. The matching `referral.*` events are published. Audited.
     *
     * **Auth:** an API key with `fraud:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostFraudCasesIdResolveBody $body
     * @return Ok
     */
    public function postFraudCasesIdResolve(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/fraud/cases/' . self::seg($id) . '/resolve', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Detect referral rings. POST /v1/fraud/detect-rings
     *
     * Looks for partners who are likely one operator with many accounts (a shared payout destination or a shared non-freemail sign-up domain) and opens a `ring` case for each group.
     *
     * **Auth:** an API key with `fraud:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostFraudDetectRingsResponse
     */
    public function postFraudDetectRings(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/fraud/detect-rings', [], null, $idempotencyKey, 'json');
    }

    /**
     * Scan for invalid traffic. POST /v1/fraud/invalid-traffic/scan
     *
     * Scores each partner's clicks over the last `windowHours` (1 to 168, default 24) for invalid traffic and returns the probability, label and contributing signals per partner, plus how many were flagged.
     *
     * **Auth:** an API key with `fraud:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostFraudInvalidTrafficScanBody $body
     * @return PostFraudInvalidTrafficScanResponse
     */
    public function postFraudInvalidTrafficScan(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/fraud/invalid-traffic/scan', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Record an FX rate. POST /v1/fx-rates
     *
     * Records the rate cross-currency payouts convert at, for a currency pair, as a decimal string (`"1.0825"`), effective now or at `effectiveAt`. A manual rate pins its pair over the daily feed until cleared. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostFxRatesBody $body
     * @return FxRate
     */
    public function postFxRates(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/fx-rates', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Clear a manual FX rate. POST /v1/fx-rates/clear-override
     *
     * Retires the manual rates for a pair, handing it back to the feed. Returns how many were cleared. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostFxRatesClearOverrideBody $body
     * @return PostFxRatesClearOverrideResponse
     */
    public function postFxRatesClearOverride(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/fx-rates/clear-override', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Sync the FX feed now. POST /v1/fx-rates/sync
     *
     * Fetches the latest ECB reference rates for this org now, instead of waiting for the daily sync.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return PostFxRatesSyncResponse
     */
    public function postFxRatesSync(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/fx-rates/sync', [], null, $idempotencyKey, 'json');
    }

    /**
     * Query the GraphQL read layer (POST). POST /v1/graphql
     *
     * The GraphQL endpoint with the query in a JSON body. Read-only, so a read-scoped API key may call it.
     *
     * **Auth:** an API key with `analytics:read` (or `full`), or a session of any role.
     * @param PostGraphqlBody $body
     * @return PostGraphqlResponse
     */
    public function postGraphql(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/graphql', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Import partners from another tool. POST /v1/import/{provider}
     *
     * Imports partners, links and codes from a Rewardful, FirstPromoter, Tolt or PartnerStack CSV export (as a `text/csv` body or `{ "csv": "…" }`) into a program. `dryRun=true` reports what would happen; `destinationUrl` is used when the export has no link column. The tool's referral parameter is added to aff.js so shared links keep crediting. Audited.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostImportProviderBody $body
     * @return PostImportProviderResponse
     */
    public function postImportProvider(string $provider, string $programId, array $body, ?bool $dryRun = null, ?string $destinationUrl = null, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/import/' . self::seg($provider) . '', ['programId' => $programId, 'dryRun' => $dryRun, 'destinationUrl' => $destinationUrl], $body, $idempotencyKey, 'json');
    }

    /**
     * Retry an integration delivery. POST /v1/integrations/deliveries/{id}/retry
     *
     * Queues a failed or skipped delivery again. 404 when there is no failed or skipped delivery with that id.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @return IntegrationDelivery
     */
    public function postIntegrationsDeliveriesIdRetry(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/integrations/deliveries/' . self::seg($id) . '/retry', [], null, $idempotencyKey, 'json');
    }

    /**
     * Test the HubSpot connection. POST /v1/integrations/hubspot/test
     *
     * Checks the token against HubSpot and (unless `setupProperties: false`) creates the custom properties the sync uses. Returns `ok` and the error, if any, rather than failing.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostIntegrationsHubspotTestBody $body
     * @return PostIntegrationsHubspotTestResponse
     */
    public function postIntegrationsHubspotTest(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/integrations/hubspot/test', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Test the Segment connection. POST /v1/integrations/segment/test
     *
     * Sends one test track event with the write key and reports whether Segment accepted it.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostIntegrationsSegmentTestResponse
     */
    public function postIntegrationsSegmentTest(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/integrations/segment/test', [], null, $idempotencyKey, 'json');
    }

    /**
     * Withdraw an invitation. POST /v1/invitations/{id}/withdraw
     *
     * Withdraws a pending creator invitation. 400 when it was already answered or withdrawn.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @return OkStatus
     */
    public function postInvitationsIdWithdraw(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/invitations/' . self::seg($id) . '/withdraw', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create a tracked link. POST /v1/links
     *
     * Creates a partner's tracked link in a program. `code` (letters, digits, `-`; stored lowercase) is unique per org and generated when omitted. Returns the `shortUrl` to share, on the org's verified link domain when it has one. 409 when the code is taken. Audited.
     *
     * **Auth:** an API key with `links:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostLinksBody $body
     * @return CreatedLink
     */
    public function postLinks(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/links', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Report an in-app purchase. POST /v1/mobile/purchases
     *
     * Your backend reports a validated App Store or Play purchase (or refund), after checking the receipt; it flows through the same commission engine as web billing. Idempotent per `eventId`. Never call this from the app itself.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostMobilePurchasesBody $body
     * @return PostMobilePurchasesResponse
     */
    public function postMobilePurchases(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/mobile/purchases', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Mark a notification read. POST /v1/notifications/{id}/read
     *
     * Marks one notification read. Unknown or already-read ids are a no-op.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session of any role.
     * @return Ok
     */
    public function postNotificationsIdRead(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/notifications/' . self::seg($id) . '/read', [], null, $idempotencyKey, 'json');
    }

    /**
     * Exchange an install code. POST /v1/oauth/token
     *
     * Server to server: the platform trades the single-use code and its PKCE `code_verifier` for a new signed-protocol connection and its signing secret (returned only here). Installing again for the same instance keeps the connection and issues a new secret, the old one verifying for 24 hours. 401 for an unknown, used, expired or mismatched code. No authentication.
     *
     * **Auth:** none.
     * @param PostOauthTokenBody $body
     * @return PostOauthTokenResponse
     */
    public function postOauthToken(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/oauth/token', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Create an on-chain connection. POST /v1/onchain/connections
     *
     * Connects an on-chain indexer: on-chain conversions posted to its webhook URL become billing events. Returns the webhook URL and signing secret.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostOnchainConnectionsBody $body
     * @return PostOnchainConnectionsResponse
     */
    public function postOnchainConnections(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/onchain/connections', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Check the hosted-page adapters. POST /v1/org/hosted-pages/check
     *
     * Read-only checks against the vendors: does the Cookie Munch site exist (and a reminder to add your portal domain as its alias), does each script URL answer. Updates `status` and `lastError`. Owner or admin.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostOrgHostedPagesCheckResponse
     */
    public function postOrgHostedPagesCheck(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/org/hosted-pages/check', [], null, $idempotencyKey, 'json');
    }

    /**
     * Add a team member. POST /v1/org/members
     *
     * Adds an existing Referalli user (by email) with a role: `owner`, `admin`, `finance`, `analyst` or `support`. Only an owner can add an owner. 404 when no user has that email; 409 when already a member. Live mode only.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostOrgMembersBody $body
     * @return PostOrgMembersResponse
     */
    public function postOrgMembers(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/org/members', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Test partner sign-in. POST /v1/org/portal-auth/test
     *
     * Checks the partner sign-in configuration (JWKS reachable, or OIDC discovery) and records the result.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostOrgPortalAuthTestResponse
     */
    public function postOrgPortalAuthTest(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/org/portal-auth/test', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create an organization. POST /v1/orgs
     *
     * Creates an organization with the signed-in user as its owner. Needs a user session (not an API key) but no `x-org-id`. Limited to 20 per hour per user. Live mode only.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session of any role.
     * @param PostOrgsBody $body
     * @return PostOrgsResponse
     */
    public function postOrgs(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/orgs', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Test your identity provider. POST /v1/org/sso/direct/test
     *
     * Checks the configuration against the IdP (OIDC discovery, or the WorkOS organization) and records the result as the configuration's last success or last error.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostOrgPortalAuthTestResponse
     */
    public function postOrgSsoDirectTest(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/org/sso/direct/test', [], null, $idempotencyKey, 'json');
    }

    /**
     * Link the org to SSO. POST /v1/org/sso/link
     *
     * Creates the org's directory tenant at the SSO provider, with the calling owner (who must have signed in with the provider) as its first admin. Owner session only. 409 when already linked elsewhere. Live mode only.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`.
     * @return PostOrgSsoLinkResponse
     */
    public function postOrgSsoLink(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/org/sso/link', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create an SSO setup link. POST /v1/org/sso/tickets
     *
     * A one-time link (valid `expiresInDays`, default 3) for the customer's IT admin to configure SAML or OIDC (and SCIM) on the provider's hosted page. The URL is returned once and never stored. Live mode only.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostOrgSsoTicketsBody $body
     * @return PostOrgSsoTicketsResponse
     */
    public function postOrgSsoTickets(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/org/sso/tickets', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Revoke an SSO setup link. POST /v1/org/sso/tickets/{id}/revoke
     *
     * Revokes a pending setup link. Live mode only.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostOrgSsoTicketsIdRevokeResponse
     */
    public function postOrgSsoTicketsIdRevoke(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/org/sso/tickets/' . self::seg($id) . '/revoke', [], null, $idempotencyKey, 'json');
    }

    /**
     * Draft an outreach sequence. POST /v1/outreach/draft
     *
     * Drafts a recruiting email sequence for a prospect. Drafts are only sent after you approve them.
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostOutreachDraftBody $body
     * @return PostOutreachDraftResponse
     */
    public function postOutreachDraft(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/outreach/draft', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Approve an outreach message. POST /v1/outreach/{id}/approve
     *
     * Approves a drafted message so `POST /v1/outreach/send-due` sends it when due. Audited.
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function postOutreachIdApprove(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/outreach/' . self::seg($id) . '/approve', [], null, $idempotencyKey, 'json');
    }

    /**
     * Send due outreach. POST /v1/outreach/send-due
     *
     * Sends approved outreach messages that are due, skipping prospects without an email and addresses on the do-not-contact list (unsubscribed).
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostOutreachSendDueResponse
     */
    public function postOutreachSendDue(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/outreach/send-due', [], null, $idempotencyKey, 'json');
    }

    /**
     * Take a commission advance. POST /v1/partner/advance/accept
     *
     * Takes an advance of `amountMinor` (up to the offer). The principal plus fee is repaid by withholding future commissions from payouts.
     *
     * **Auth:** a partner session.
     * @param PostPartnerAdvanceAcceptBody $body
     * @return PostPartnerAdvanceAcceptResponse
     */
    public function postPartnerAdvanceAccept(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/advance/accept', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Get a wallet sign-in nonce. POST /v1/partner/auth/wallet/nonce
     *
     * Starts wallet sign-in (and AI agent registration): returns a single-use nonce, valid 10 minutes, and the message to sign with the wallet.
     *
     * **Auth:** none.
     * @param PostPartnerAuthWalletNonceBody $body
     * @return PostPartnerAuthWalletNonceResponse
     */
    public function postPartnerAuthWalletNonce(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/auth/wallet/nonce', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Sign in with a wallet. POST /v1/partner/auth/wallet/verify
     *
     * Verifies the wallet's signature over the nonce message and signs the partner in (creating the account on first use), setting the session cookie. 401 for an expired nonce or a signature that does not match.
     *
     * **Auth:** none.
     * @param PostPartnerAuthWalletVerifyBody $body
     * @return PostPartnerAuthWalletVerifyResponse
     */
    public function postPartnerAuthWalletVerify(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/auth/wallet/verify', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Accept a contract. POST /v1/partner/contracts/{id}/accept
     *
     * Accepts a sent contract; its compensation then applies to the partner's commissions in that program.
     *
     * **Auth:** a partner session.
     * @return OkStatus
     */
    public function postPartnerContractsIdAccept(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/contracts/' . self::seg($id) . '/accept', [], null, $idempotencyKey, 'json');
    }

    /**
     * Decline a contract. POST /v1/partner/contracts/{id}/decline
     *
     * Declines a sent contract.
     *
     * **Auth:** a partner session.
     * @return OkStatus
     */
    public function postPartnerContractsIdDecline(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/contracts/' . self::seg($id) . '/decline', [], null, $idempotencyKey, 'json');
    }

    /**
     * Register a deal. POST /v1/partner/deals
     *
     * A partner registers a B2B deal (company, contact, expected value) in a program they are approved in, for the merchant to approve. Publishes `deal.submitted`.
     *
     * **Auth:** a partner session.
     * @param PostPartnerDealsBody $body
     * @return PostPartnerDealsResponse
     */
    public function postPartnerDeals(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/deals', [], $body, $idempotencyKey, 'json');
    }

    /**
     * File a dispute. POST /v1/partner/disputes
     *
     * Files a dispute with a merchant about a missing attribution or an unpaid commission, optionally for a referral. The merchant resolves it.
     *
     * **Auth:** a partner session.
     * @param PostPartnerDisputesBody $body
     * @return PostPartnerDisputesResponse
     */
    public function postPartnerDisputes(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/disputes', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Accept an invitation. POST /v1/partner/invitations/{id}/accept
     *
     * Accepts a pending invitation: the partner is created in the merchant's org if needed and enrolled, approved. The merchant is notified.
     *
     * **Auth:** a partner session.
     * @return OkStatus
     */
    public function postPartnerInvitationsIdAccept(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/invitations/' . self::seg($id) . '/accept', [], null, $idempotencyKey, 'json');
    }

    /**
     * Decline an invitation. POST /v1/partner/invitations/{id}/decline
     *
     * Declines a pending invitation. The merchant is notified.
     *
     * **Auth:** a partner session.
     * @return OkStatus
     */
    public function postPartnerInvitationsIdDecline(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/invitations/' . self::seg($id) . '/decline', [], null, $idempotencyKey, 'json');
    }

    /**
     * Submit identity verification. POST /v1/partner/kyc/submit
     *
     * Submits the partner's legal name, country and optional date of birth and document reference for identity verification and sanctions screening. Merchants that require KYC pay only verified partners. Limited to 5 per hour per IP.
     *
     * **Auth:** a partner session.
     * @param PostPartnerKycSubmitBody $body
     * @return PostPartnerKycSubmitResponse
     */
    public function postPartnerKycSubmit(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/kyc/submit', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Create a link. POST /v1/partner/links
     *
     * Creates a tracked link in a program the partner is approved in (403 otherwise), optionally for one of the program's marketing assets. `code` is generated when omitted; 409 when taken.
     *
     * **Auth:** a partner session.
     * @param PostPartnerLinksBody $body
     * @return CreatedLink
     */
    public function postPartnerLinks(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/links', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Mark my notification read. POST /v1/partner/notifications/{id}/read
     *
     * Marks one of the partner's notifications read.
     *
     * **Auth:** a partner session.
     * @return Ok
     */
    public function postPartnerNotificationsIdRead(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/notifications/' . self::seg($id) . '/read', [], null, $idempotencyKey, 'json');
    }

    /**
     * Accept self-billing. POST /v1/partner/orgs/{orgId}/self-billing
     *
     * Accepts the current self-billing agreement with this merchant (`{ "accept": true }`), so the merchant issues the invoices for the partner's payouts. 404 until payout details exist.
     *
     * **Auth:** a partner session.
     * @param PostPartnerOrgsOrgIdSelfBillingBody $body
     * @return PostPartnerOrgsOrgIdSelfBillingResponse
     */
    public function postPartnerOrgsOrgIdSelfBilling(string $orgId, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/orgs/' . self::seg($orgId) . '/self-billing', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Submit my tax form. POST /v1/partner/orgs/{orgId}/tax-form
     *
     * Submits a W-9, W-8BEN or W-8BEN-E to this merchant. A tax form is required before the partner is included in payouts.
     *
     * **Auth:** a partner session.
     * @param PostPartnerOrgsOrgIdTaxFormBody $body
     * @return Ok
     */
    public function postPartnerOrgsOrgIdTaxForm(string $orgId, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/orgs/' . self::seg($orgId) . '/tax-form', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Apply to a program. POST /v1/partner/programs/{programId}/apply
     *
     * Applies to an active program (for example from the marketplace), creating the partner in that merchant's org if needed. The merchant approves or rejects it. Publishes `partner.applied`. 403 for blocked accounts.
     *
     * **Auth:** a partner session.
     * @return PostPartnerProgramsProgramIdApplyResponse
     */
    public function postPartnerProgramsProgramIdApply(string $programId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/programs/' . self::seg($programId) . '/apply', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create a partner. POST /v1/partners
     *
     * Creates a partner. `email` is unique per org, and so is `externalRef` (your own id for them, such as a user id). With `upsert: true` an existing partner matching the email or externalRef is returned instead of a 409 (and gets the externalRef if it had none). Over the plan's partner limit this is `402 payment_required`. Audited.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostPartnersBody $body
     * @return Partner
     */
    public function postPartners(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partners', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Turn off two-factor. POST /v1/partner/security/totp/disable
     *
     * Turns two-factor off; needs a valid current `code`. 401 for a wrong code.
     *
     * **Auth:** a partner session.
     * @param PostPartnerSecurityTotpDisableBody $body
     * @return PostPartnerSecurityTotpDisableResponse
     */
    public function postPartnerSecurityTotpDisable(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/security/totp/disable', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Turn on two-factor. POST /v1/partner/security/totp/enable
     *
     * Confirms setup with a current 6-digit `code`. From then on, changing payout details needs a code in `x-totp-code`. 401 for a wrong code.
     *
     * **Auth:** a partner session.
     * @param PostPartnerSecurityTotpEnableBody $body
     * @return PostPartnerSecurityTotpEnableResponse
     */
    public function postPartnerSecurityTotpEnable(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/security/totp/enable', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Start two-factor setup. POST /v1/partner/security/totp/setup
     *
     * Generates a TOTP secret and its `otpauth://` URI for an authenticator app. 400 when two-factor is already on.
     *
     * **Auth:** a partner session.
     * @return PostPartnerSecurityTotpSetupResponse
     */
    public function postPartnerSecurityTotpSetup(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/security/totp/setup', [], null, $idempotencyKey, 'json');
    }

    /**
     * Record a partner's tax form. POST /v1/partners/{id}/tax-form
     *
     * Records a W-9, W-8BEN or W-8BEN-E for the partner (`data` is the form's fields). A tax form on file is required before a partner is included in a payout run.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostPartnersIdTaxFormBody $body
     * @return Ok
     */
    public function postPartnersIdTaxForm(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partners/' . self::seg($id) . '/tax-form', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Accept program terms. POST /v1/partner/terms/{versionId}/accept
     *
     * Records the partner's acceptance of a terms version. Repeating it is a no-op.
     *
     * **Auth:** a partner session.
     * @return Ok
     */
    public function postPartnerTermsVersionIdAccept(string $versionId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/partner/terms/' . self::seg($versionId) . '/accept', [], null, $idempotencyKey, 'json');
    }

    /**
     * Verify a partner passport. POST /v1/passport/verify
     *
     * Checks a partner's signed reputation passport: `valid: true` with its claims, or `valid: false` with the reason (bad signature, expired). No authentication.
     *
     * **Auth:** none.
     * @param PostPassportVerifyBody $body
     * @return PostPassportVerifyResponse
     */
    public function postPassportVerify(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/passport/verify', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Create a payout run. POST /v1/payout-runs
     *
     * Builds a draft run: one payout per partner who has a payout profile, a tax form and an approved, unpaid balance over their threshold, converted into their payout currency at recorded FX, each with a self-billing invoice. Partners left out are listed in `skipped` with the reason. Nothing is paid until you execute it. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return PayoutRunCreated
     */
    public function postPayoutRuns(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/payout-runs', [], null, $idempotencyKey, 'json');
    }

    /**
     * Cancel a payout run. POST /v1/payout-runs/{id}/cancel
     *
     * Cancels a run that hasn't paid out and releases its lines back to the partners' approved balances. A run with money in flight is 409. Publishes `payout.cancelled` per payout. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return PostPayoutRunsIdCancelResponse
     */
    public function postPayoutRunsIdCancel(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/payout-runs/' . self::seg($id) . '/cancel', [], null, $idempotencyKey, 'json');
    }

    /**
     * Execute a payout run. POST /v1/payout-runs/{id}/execute
     *
     * Pays a draft run through the org's own connected payout providers (methods with no connection are simulated and logged; test mode uses the test rail). Returns how many were sent, submitted (settling asynchronously) and failed; each outcome publishes `payout.sent`, `payout.submitted` or `payout.failed`. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return PostPayoutRunsIdExecuteResponse
     */
    public function postPayoutRunsIdExecute(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/payout-runs/' . self::seg($id) . '/execute', [], null, $idempotencyKey, 'json');
    }

    /**
     * Run due payout schedules. POST /v1/payout-runs/run-scheduled
     *
     * Creates and executes payout runs for every schedule (org or program) that is due now. This also runs hourly on its own.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return PostPayoutRunsRunScheduledResponse
     */
    public function postPayoutRunsRunScheduled(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/payout-runs/run-scheduled', [], null, $idempotencyKey, 'json');
    }

    /**
     * Mint a DSAR executor key. POST /v1/privacy/executor-keys
     *
     * Enables a DSAR tool for your org and mints its executor key (a bearer key, or a `whsec_` secret for Standard Webhooks), returned once. Rotating stops the old key at once. Also stores vendor settings: a Transcend public key and API key for completion callbacks, an Osano webhook secret.
     *
     * **Auth:** an API key with `privacy:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostPrivacyExecutorKeysBody $body
     * @return PostPrivacyExecutorKeysResponse
     */
    public function postPrivacyExecutorKeys(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/privacy/executor-keys', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Check a DSAR tool connection. POST /v1/privacy/executors/{adapter}/check
     *
     * Whether the tool is ready: a key or the vendor credentials it needs, and no failing requests since it was set up. Answers `{ok, detail, fix}`.
     *
     * **Auth:** an API key with `privacy:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostPrivacyExecutorsAdapterCheckResponse
     */
    public function postPrivacyExecutorsAdapterCheck(string $adapter, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/privacy/executors/' . self::seg($adapter) . '/check', [], null, $idempotencyKey, 'json');
    }

    /**
     * Erase a data subject. POST /v1/privacy/forget
     *
     * Erases (pseudonymizes, keeping the ledger balanced) a customer by `customerRef`, a partner by `partnerId`, or by `email` both the partner with that email and every customer stored under its hash. Send exactly one. 400 when nothing is found. Audited.
     *
     * **Auth:** an API key with `privacy:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostPrivacyForgetBody $body
     * @return PostPrivacyForgetResponse
     */
    public function postPrivacyForget(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/privacy/forget', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Find a data subject by email. POST /v1/privacy/lookup
     *
     * Which customers and partners an email refers to. The email is hashed on the server and never stored.
     *
     * **Auth:** an API key with `privacy:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostPrivacyLookupBody $body
     * @return PostPrivacyLookupResponse
     */
    public function postPrivacyLookup(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/privacy/lookup', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Open a data-subject request. POST /v1/privacy/requests
     *
     * Opens an `access` or `erasure` request for one subject (`email`, `customerRef` or `partnerId`) and answers `202` with the request to poll. Publishes `privacy.request_completed` when done.
     *
     * **Auth:** an API key with `privacy:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostPrivacyRequestsBody $body
     * @return PostPrivacyRequestsResponse
     */
    public function postPrivacyRequests(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/privacy/requests', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Rebuild ROI figures. POST /v1/profitability/rebuild
     *
     * Recomputes every stored ROI figure from the value events with the current settings and mappings, in the background. Returns a `jobId` to poll; while one rebuild is running, the same job is returned. Audited.
     *
     * **Auth:** an API key with `analytics:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostProfitabilityRebuildResponse
     */
    public function postProfitabilityRebuild(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/profitability/rebuild', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create a program. POST /v1/programs
     *
     * Creates an affiliate program: its attribution model, cookie window, how long after sign-up a conversion still counts, terms, public page and settings. `slug` is unique per org. Terms are versioned so partners can be asked to accept new ones. Over the plan's program limit this is `402 payment_required`.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostProgramsBody $body
     * @return Program
     */
    public function postPrograms(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/programs', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Apply partner levels. POST /v1/programs/{id}/apply-leveling
     *
     * Promotes the program's partners to the highest level their referral count qualifies for (never demotes). Publishes `partner.level_up` per promotion.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostProgramsIdApplyLevelingResponse
     */
    public function postProgramsIdApplyLeveling(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/programs/' . self::seg($id) . '/apply-leveling', [], null, $idempotencyKey, 'json');
    }

    /**
     * Run autopricing. POST /v1/programs/{id}/autoprice/run
     *
     * Moves each partner's rate toward the target and publishes the new rates as partner overrides on a new rule version. Objective `roas` compares attributed revenue to commission; `roi` uses each partner's matured referral ROI, holding partners with too few matured referrals or an unknown ROI (listed in `held`). 400 when autopricing is off, the program has no percent-based rule, or no partner has a known ROI under `roi`.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostProgramsIdAutopriceRunBody $body
     * @return PostProgramsIdAutopriceRunResponse
     */
    public function postProgramsIdAutopriceRun(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/programs/' . self::seg($id) . '/autoprice/run', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Enroll a partner. POST /v1/programs/{id}/enrollments
     *
     * Enrolls an existing partner in the program, approved at once. Publishes `partner.enrolled`. 409 when already enrolled.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostProgramsIdEnrollmentsBody $body
     * @return Enrollment
     */
    public function postProgramsIdEnrollments(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/programs/' . self::seg($id) . '/enrollments', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Approve an application. POST /v1/programs/{id}/enrollments/{enrollmentId}/approve
     *
     * Approves a pending application (`status: "applied"`). Publishes `partner.approved`. 404 when there is no pending application with that id. Audited.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostProgramsIdEnrollmentsEnrollmentIdApproveResponse
     */
    public function postProgramsIdEnrollmentsEnrollmentIdApprove(string $id, string $enrollmentId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/programs/' . self::seg($id) . '/enrollments/' . self::seg($enrollmentId) . '/approve', [], null, $idempotencyKey, 'json');
    }

    /**
     * Reject an application. POST /v1/programs/{id}/enrollments/{enrollmentId}/reject
     *
     * Rejects a pending application. 404 when there is no pending application with that id. Audited.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostProgramsIdEnrollmentsEnrollmentIdRejectResponse
     */
    public function postProgramsIdEnrollmentsEnrollmentIdReject(string $id, string $enrollmentId, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/programs/' . self::seg($id) . '/enrollments/' . self::seg($enrollmentId) . '/reject', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create a partner group. POST /v1/programs/{id}/groups
     *
     * A group of partners in a program with its own commission base (or `null` to keep the program rule's), hold days, payout threshold, payout currency, onboarding message and checklist. Names are unique per program (409).
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostProgramsIdGroupsBody $body
     * @return PartnerGroup
     */
    public function postProgramsIdGroups(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/programs/' . self::seg($id) . '/groups', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Create a promotion. POST /v1/programs/{id}/promotions
     *
     * A time-boxed commission change for the whole program or one group: `replace` the base rate, or `boost` it by `bps`, between `startsAt` and `endsAt`. Payments in that window get it.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostProgramsIdPromotionsBody $body
     * @return Promotion
     */
    public function postProgramsIdPromotions(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/programs/' . self::seg($id) . '/promotions', [], $body, $idempotencyKey, 'json');
    }

    /**
     * End a promotion. POST /v1/promotions/{id}/end
     *
     * Ends a promotion now: payments from this moment on no longer get it.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Promotion
     */
    public function postPromotionsIdEnd(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/promotions/' . self::seg($id) . '/end', [], null, $idempotencyKey, 'json');
    }

    /**
     * Join a program. POST /v1/public/programs/{handle}/join
     *
     * One-step join from the public page for a signed-in partner: creates (or claims, with a verified email) the partner in the merchant's org and enrolls them, approved with a first link when the program auto-approves, otherwise as an application. Publishes `partner.approved` or `partner.applied`. 409 when the merchant's partner with that email belongs to another account.
     *
     * **Auth:** a partner session.
     * @param PostPublicProgramsHandleJoinBody $body
     * @return PostPublicProgramsHandleJoinResponse
     */
    public function postPublicProgramsHandleJoin(string $handle, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/public/programs/' . self::seg($handle) . '/join', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Recompute quality scores. POST /v1/quality/recompute
     *
     * Snapshots every partner's quality score now; per the org's policy, low scores open a `quality` case or suspend the partner. Audited.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostQualityRecomputeResponse
     */
    public function postQualityRecompute(?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/quality/recompute', [], null, $idempotencyKey, 'json');
    }

    /**
     * Attribute a new customer. POST /v1/referrals/associate
     *
     * The key server-side call: tell Referalli a customer signed up, with whatever you know about where they came from (`referralToken`/`ref_click_id`, `anonId`, `couponCode`, `emailHash`, IP and user agent). The attribution engine picks the partner under the program's model and windows. `referral` is `null` when no partner matched (not an error); `reasoning.notes` says why. Repeating `idempotencyKey` returns the existing referral. `occurredAt` records a late call at the real sign-up time (up to 5 minutes of clock skew is tolerated) and backfills payments since. `emailDomain` lets burner-email sign-ups be held for review. Publishes `referral.created` (or `referral.held`).
     *
     * **Auth:** an API key with `referrals:write` (or `full`), or a session of any role.
     * @param PostReferralsAssociateBody $body
     * @return AssociateResponse
     */
    public function postReferralsAssociate(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/referrals/associate', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Approve a held referral. POST /v1/referrals/{id}/approve
     *
     * Releases a referral held for review (`pending_review`) back to `active`. 404 when it isn't pending review. Publishes `referral.approved`. Audited.
     *
     * **Auth:** an API key with `referrals:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Referral
     */
    public function postReferralsIdApprove(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/referrals/' . self::seg($id) . '/approve', [], null, $idempotencyKey, 'json');
    }

    /**
     * Reassign a referral. POST /v1/referrals/{id}/reassign
     *
     * Moves the referral to another partner (recorded as a manual match). Publishes `referral.reassigned` with the previous partner. Audited.
     *
     * **Auth:** an API key with `referrals:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostReferralsIdReassignBody $body
     * @return Referral
     */
    public function postReferralsIdReassign(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/referrals/' . self::seg($id) . '/reassign', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Void a referral. POST /v1/referrals/{id}/void
     *
     * Voids the referral so it earns nothing more. Publishes `referral.voided`. Audited.
     *
     * **Auth:** an API key with `referrals:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Referral
     */
    public function postReferralsIdVoid(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/referrals/' . self::seg($id) . '/void', [], null, $idempotencyKey, 'json');
    }

    /**
     * Reward a partner. POST /v1/rewards
     *
     * Rewards a partner for something outside a sale (a community answer, an event): one `earned` commission line that is approved and paid like any other. Name the partner by `partnerId` or `partnerExternalRef`; the amount is `amountMinor` (+ `currency`) or comes from a rule (`ruleKey`, or the `event` a rule maps). Idempotent on `idempotencyKey`: a retry returns the first grant with 200; the same key with a different request is 409.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostRewardsBody $body
     * @return PostRewardsResponse
     */
    public function postRewards(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/rewards', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Redeem a reward. POST /v1/rewards/{id}/redeem
     *
     * Records a (possibly partial) redemption: `amountMinor` (default the remaining balance) is capped at what's left, and the reward becomes `redeemed` once it is used up. `externalId` makes it idempotent (409 if reused for another reward). Publishes `credit.redeemed`.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostRewardsIdRedeemBody $body
     * @return PostRewardsRedeemByCodeResponse
     */
    public function postRewardsIdRedeem(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/rewards/' . self::seg($id) . '/redeem', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Redeem a reward by code. POST /v1/rewards/redeem-by-code
     *
     * Records a redemption of the reward with this code; see `POST /v1/rewards/{id}/redeem`. 404 for an unknown code.
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostRewardsRedeemByCodeBody $body
     * @return PostRewardsRedeemByCodeResponse
     */
    public function postRewardsRedeemByCode(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/rewards/redeem-by-code', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Open a review for a pattern match. POST /v1/roi/patterns/{pattern}/review
     *
     * Turns one live pattern match (by `customerRef` and/or `partnerId`, optionally `programId`) into a `value_pattern` fraud case against its partner, or returns the open case for the same match. Publishes `fraud.case_opened`. 404 when no such match exists. Audited.
     *
     * **Auth:** an API key with `analytics:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostRoiPatternsPatternReviewBody $body
     * @return FraudCase
     */
    public function postRoiPatternsPatternReview(string $pattern, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/roi/patterns/' . self::seg($pattern) . '/review', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Simulate billing history. POST /v1/sandbox/simulate
     *
     * Generates deterministic billing history through the real commission pipeline, so you can see commissions flow without a provider: a new sandbox customer referred to the partner, `months` (default 3) of subscription payments at `priceMinor`, then for `scenario: "refund"` a half refund of the first invoice or for `churn` a cancellation. Returns the customer and what was created. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostSandboxSimulateBody $body
     * @return PostSandboxSimulateResponse
     */
    public function postSandboxSimulate(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/sandbox/simulate', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Preview a support card. POST /v1/support/apps/{adapter}/test
     *
     * Renders what the tool would show for a contact, from your own session: the context and the tool-format card. Nothing is sent to the tool.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostSupportAppsAdapterTestBody $body
     * @return PostSupportAppsAdapterTestResponse
     */
    public function postSupportAppsAdapterTest(string $adapter, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/support/apps/' . self::seg($adapter) . '/test', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Render a support card for a tool. POST /v1/support/cards/{orgId}/{adapter}
     *
     * Called by the support tool, signed in its own scheme (Chatly `x-chatly-signature`, Intercom `X-Body-Signature`, HubSpot v3, Front, Help Scout, a Zendesk app JWT, or the custom `X-Referalli-Signature`). Answers the tool's card format. An unknown org, a tool that is not connected, or a bad or stale signature all answer 404.
     *
     * **Auth:** none.
     * @param array<string, mixed> $body
     * @return PostSupportCardsOrgIdAdapterResponse
     */
    public function postSupportCardsOrgIdAdapter(string $orgId, string $adapter, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/support/cards/' . self::seg($orgId) . '/' . self::seg($adapter) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * File a corrected 1099. POST /v1/tax/1099/documents/{id}/correct
     *
     * Files a corrected form for one document with the partner's current amount. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return TaxFiling
     */
    public function postTax1099DocumentsIdCorrect(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/tax/1099/documents/' . self::seg($id) . '/correct', [], null, $idempotencyKey, 'json');
    }

    /**
     * File 1099-NEC forms. POST /v1/tax/1099/filings
     *
     * E-files the year's 1099-NEC forms through the connected provider and records one document per partner. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostTax1099FilingsBody $body
     * @return TaxFiling
     */
    public function postTax1099Filings(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/tax/1099/filings', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Refresh a filing status. POST /v1/tax/1099/filings/{id}/refresh
     *
     * Asks the filing provider for the latest status of a filing and its documents; accepted forms are then delivered to partners (`tax.form_delivered`).
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @return PostTax1099FilingsIdRefreshResponse
     */
    public function postTax1099FilingsIdRefresh(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/tax/1099/filings/' . self::seg($id) . '/refresh', [], null, $idempotencyKey, 'json');
    }

    /**
     * Advance the test clock. POST /v1/test_clock/advance
     *
     * Test mode only. Moves the test org's clock forward by `seconds` (never back), then runs what came due: held commissions are approved, payout schedules fire and retention purges run. Returns the new time and what ran. Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PostTestClockAdvanceBody $body
     * @return PostTestClockAdvanceResponse
     */
    public function postTestClockAdvance(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/test_clock/advance', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Track an event. POST /v1/track/events
     *
     * Records one event. `type: "event"` is a product event for a known customer (`event`, such as `trial_started`) that can pay a bounty under the program's commission rule; it returns whether it was recorded and the commission. `idempotencyKey` deduplicates. `type: "click"` records a server-side click for a partner; `type: "custom"` records an audited custom event. Publishable keys may send only custom events.
     *
     * **Auth:** an API key with `events:write` (or `full`), or a session of any role.
     * @param PostTrackEventsBodyOption1|PostTrackEventsBodyOption2|PostTrackEventsBodyOption3 $body
     * @return PostTrackEventsResponse
     */
    public function postTrackEvents(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/track/events', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Unsubscribe from outreach. POST /v1/unsubscribe/{token}
     *
     * The one-click unsubscribe link in outreach emails. No authentication; the token identifies the recipient.
     *
     * **Auth:** none.
     * @return PostUnsubscribeTokenResponse
     */
    public function postUnsubscribeToken(string $token, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/unsubscribe/' . self::seg($token) . '', [], null, $idempotencyKey, 'json');
    }

    /**
     * Record value events. POST /v1/value/events
     *
     * Reports up to 500 value facts from your platform: `payment`, `refund`, `credit_granted`, `credit_redeemed`, `credit_expired`, `credit_revoked`, `cost` or `adjustment`. Each needs `kind`, `currency`, `externalId` (your stable id, which makes it idempotent) and `occurredAt`, plus the customer, partner (`partnerId` or `partnerExternalRef`), grant, program, product and amount fields (`cashMinor`, `creditAppliedMinor`, `discountMinor`, `taxMinor`, `feesMinor`, `costMinor`, `faceMinor`) that apply. Each event is validated and recorded on its own: `results` and `errors` are by index. A repeat of an `externalId` with new figures supersedes the earlier one.
     *
     * **Auth:** an API key with `analytics:write` (or `full`), or a session of any role.
     * @param PostValueEventsBody $body
     * @return PostValueEventsResponse
     */
    public function postValueEvents(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/value/events', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Import value events from CSV. POST /v1/value/import
     *
     * Imports value events from CSV text (up to 10,000 rows and 5 MB, else `413 payload_too_large`) with a `mapping` from column names to event fields (money as `<field>Minor` or `<field>Major`). `kind` applies to every row unless a column maps to it. Up to 500 rows are recorded before the response; a larger file answers `202` with a `jobId` to poll. `dryRun` returns the first 20 parsed rows and every row error without recording.
     *
     * **Auth:** an API key with `analytics:write` (or `full`), or a session of any role.
     * @param PostValueImportBody $body
     * @return PostValueImportResponse
     */
    public function postValueImport(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/value/import', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Replay a webhook delivery. POST /v1/webhook-deliveries/{id}/replay
     *
     * Queues the delivery again at once with its attempt count reset. It keeps its `webhook-id`, so receivers can deduplicate.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     * @return Ok
     */
    public function postWebhookDeliveriesIdReplay(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/webhook-deliveries/' . self::seg($id) . '/replay', [], null, $idempotencyKey, 'json');
    }

    /**
     * Create a webhook endpoint. POST /v1/webhook-endpoints
     *
     * Subscribes an HTTPS URL to event topics (default `["*"]`, every event; see the `webhooks` section of this document for each topic's payload). `programIds` limits it to events about those programs (org-wide events such as payouts are then not sent). Deliveries are signed the Standard Webhooks way with the returned `secret` (`whsec_…`), shown only here. `legacySignature: true` also sends the deprecated body-only signature. `alertContacts` (up to 10 emails) are emailed, with the org owner, when the endpoint has failed for 1 hour and again at 24 hours; it is disabled after 72 hours of failures or 1,000 failed attempts in a row.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostWebhookEndpointsBody $body
     * @return PostWebhookEndpointsResponse
     */
    public function postWebhookEndpoints(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/webhook-endpoints', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Replay failed deliveries. POST /v1/webhook-endpoints/{id}/replay
     *
     * Requeues the endpoint's failed deliveries created at or after `since` (ISO 8601), for after an outage. Each keeps its `webhook-id`, so receivers can dedupe. Audited.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     *
     * since: Requeue failed deliveries created at or after this time.
     * @return PostWebhookEndpointsIdReplayResponse
     */
    public function postWebhookEndpointsIdReplay(string $id, string $since, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/webhook-endpoints/' . self::seg($id) . '/replay', ['since' => $since], null, $idempotencyKey, 'json');
    }

    /**
     * Rotate an endpoint secret. POST /v1/webhook-endpoints/{id}/rotate-secret
     *
     * Issues a new signing secret, returned once. For 24 hours (`previousSecretExpiresAt`) every delivery carries a signature from each secret, so receivers can switch without dropping any. Audited.
     *
     * **Auth:** an API key with `webhooks:write` (or `full`), or a session with role `owner`, `admin`.
     * @return PostWebhookEndpointsIdRotateSecretResponse
     */
    public function postWebhookEndpointsIdRotateSecret(string $id, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/webhook-endpoints/' . self::seg($id) . '/rotate-secret', [], null, $idempotencyKey, 'json');
    }

    /**
     * Mint a referral widget token. POST /v1/widget/tokens
     *
     * Your backend mints a short-lived token (60 to 3600 seconds, default 900) for a signed-in customer, identified by `customerRef` or `partnerExternalRef`, for the in-app referral widget. When the program has `settings.widget.autoEnroll`, a customer who isn't a partner yet is created on demand (send `email`). The token only reads that partner's own data.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session of any role.
     * @param PostWidgetTokensBody $body
     * @return PostWidgetTokensResponse
     */
    public function postWidgetTokens(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/widget/tokens', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Record a conversion from Zapier. POST /v1/zapier/conversions
     *
     * Zapier's "Record conversion" action: a payment (or refund) for a customer through a generic billing connection (the org's first active one unless `connectionId`), with no signature needed. Idempotent by `providerEventId`. 400 without a generic billing connection.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostZapierConversionsBody $body
     * @return PostZapierConversionsResponse
     */
    public function postZapierConversions(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/zapier/conversions', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Subscribe a Zapier hook. POST /v1/zapier/hooks
     *
     * REST hook subscribe, called by Zapier when a Zap turns on: events of `event` are posted to the HTTPS `target_url`.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PostZapierHooksBody $body
     * @return ZapierHook
     */
    public function postZapierHooks(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('POST', '/v1/zapier/hooks', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set a vendor-issued secret. PUT /v1/auth/connections/{id}/secret
     *
     * For webhook connectors whose vendor issues the signing secret (Clerk, Stytch, WorkOS) or key set (Kinde's JWKS document): replaces the connection's secret. The previous one keeps verifying for 24 hours. Signed-protocol connections rotate instead. Audited.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutAuthConnectionsIdSecretBody $body
     * @return PutAuthConnectionsIdSecretResponse
     */
    public function putAuthConnectionsIdSecret(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/auth/connections/' . self::seg($id) . '/secret', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set provider API credentials. PUT /v1/billing/connections/{id}/credentials
     *
     * For providers that send thin webhooks (Recurly, BigCommerce), the API credentials used to fetch the full event: `apiKey`, or `apiToken` plus `storeHash`, and `region`. Stored encrypted. 400 for providers that take no credentials or when a required field is missing. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutBillingConnectionsIdCredentialsBody $body
     * @return PutBillingConnectionsIdCredentialsResponse
     */
    public function putBillingConnectionsIdCredentials(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/billing/connections/' . self::seg($id) . '/credentials', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the webhook signing secret. PUT /v1/billing/connections/{id}/secret
     *
     * Replaces the connection's signing secret with the provider's own (at least 8 characters). The previous secret keeps verifying for 24 hours. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutBillingConnectionsIdSecretBody $body
     * @return PutBillingConnectionsIdSecretResponse
     */
    public function putBillingConnectionsIdSecret(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/billing/connections/' . self::seg($id) . '/secret', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the value mapping. PUT /v1/billing/connections/{id}/value-mapping
     *
     * Where cash, credit applied, discount, cost and product live in this connection's payloads, as dot paths (`[]` sums an array, for example `data.discounts[].amount`), and whether amounts are in minor or major units. Each save bumps the mapping version; a rebuild re-applies it to stored events. Audited.
     *
     * **Auth:** an API key with `billing:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutBillingConnectionsIdValueMappingBody $body
     * @return PutBillingConnectionsIdValueMappingResponse
     */
    public function putBillingConnectionsIdValueMapping(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/billing/connections/' . self::seg($id) . '/value-mapping', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update branding. PUT /v1/branding
     *
     * Sets the logo URL, theme (only the documented `--r-*` tokens, with plain CSS values) and email sender. Omitted fields keep their value. `warnings` lists theme text/background pairs (`--r-accent-ink` on `--r-accent`, `--r-ink` on `--r-paper`) below the 4.5:1 WCAG AA contrast; the theme is saved anyway.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutBrandingBody $body
     * @return PutBrandingResponse
     */
    public function putBranding(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/branding', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update email settings. PUT /v1/email/settings
     *
     * Sets the email provider and its API key (write-only: omit to keep it, `null` to remove), the from address and name, reply-to, logo and primary color for partner emails. Without a provider, no email is sent.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutEmailSettingsBody $body
     * @return EmailSettings
     */
    public function putEmailSettings(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/email/settings', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Override an email template. PUT /v1/email/templates/{event}/{locale}
     *
     * Replaces the subject, text and optional HTML of one event in one locale. 404 for an unknown event or locale.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutEmailTemplatesEventLocaleBody $body
     * @return PutEmailTemplatesEventLocaleResponse
     */
    public function putEmailTemplatesEventLocale(string $event, string $locale, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/email/templates/' . self::seg($event) . '/' . self::seg($locale) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Connect HubSpot. PUT /v1/integrations/hubspot
     *
     * Connects HubSpot with your private-app `token` (required the first time; omit to keep it) to sync partners as contacts and referrals as deals in `pipeline`, moving them to `paidDealStage` when they pay. `status: "paused"` stops syncing.
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutIntegrationsHubspotBody $body
     * @return IntegrationConnection
     */
    public function putIntegrationsHubspot(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/integrations/hubspot', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Connect Segment. PUT /v1/integrations/segment
     *
     * Connects a Segment source with its `writeKey` (required the first time) and sends referral, commission, payout and partner events as track calls; `events` limits which topics (`null` for all).
     *
     * **Auth:** an API key with `integrations:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutIntegrationsSegmentBody $body
     * @return IntegrationConnection
     */
    public function putIntegrationsSegment(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/integrations/segment', [], $body, $idempotencyKey, 'json');
    }

    /**
     * List a program in the marketplace. PUT /v1/marketplace/listing
     *
     * Creates or updates the marketplace listing of a program: visibility (`public` or `unlisted`), category, headline, description and sponsored placement. Audited.
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutMarketplaceListingBody $body
     * @return Ok
     */
    public function putMarketplaceListing(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/marketplace/listing', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set my email language. PUT /v1/me/locale
     *
     * The signed-in user's preferred locale for emails. User session only.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session of any role.
     * @param PutMeLocaleBody $body
     * @return PutMeLocaleResponse
     */
    public function putMeLocale(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/me/locale', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Turn my ROI digest on or off. PUT /v1/me/roi-digest
     *
     * Whether the signed-in member receives this org's periodic credit ROI digest email. User session only.
     *
     * **Auth:** an API key with `team:write` (or `full`), or a session of any role.
     * @param PutMeRoiDigestBody $body
     * @return PutMeRoiDigestResponse
     */
    public function putMeRoiDigest(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/me/roi-digest', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Join or leave the attribution network. PUT /v1/network/settings
     *
     * Opts the org in or out of the cross-merchant attribution network: contributing its referral touchpoints (as hashed customer identities and partner accounts, never merchant identity or PII) and, in return, reading the network journey.
     *
     * **Auth:** an API key with `growth:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutNetworkSettingsBody $body
     * @return PutNetworkSettingsResponse
     */
    public function putNetworkSettings(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/network/settings', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Turn the FX feed on or off. PUT /v1/org/fx-feed
     *
     * Turns the daily ECB reference-rate feed on or off. Turning it on syncs once at once and returns how many rates were inserted. Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PutOrgFxFeedBody $body
     * @return PutOrgFxFeedResponse
     */
    public function putOrgFxFeed(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/fx-feed', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the hosted-page consent and chat. PUT /v1/org/hosted-pages
     *
     * Validates and saves the adapters. A CMP's `scriptUrl` must be https on that vendor's own hosts; `custom` needs every origin listed. `customOrigins` adds origins per CSP directive (https or wss, no wildcards, no keywords). Owner or admin. Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutOrgHostedPagesBody $body
     * @return GetOrgHostedPagesResponse
     */
    public function putOrgHostedPages(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/hosted-pages', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the org payout schedule. PUT /v1/org/payout-schedule
     *
     * When payouts run automatically for every program without its own schedule: a `schedule` (`monthly`, `weekly`, `twice_monthly` or `custom` dates), the older `dayOfMonth` form, or `null` to turn automatic payouts off. Send exactly one of `schedule` and `dayOfMonth`. Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PutOrgPayoutScheduleBody $body
     * @return PutOrgPayoutScheduleResponse
     */
    public function putOrgPayoutSchedule(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/payout-schedule', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set partner sign-in. PUT /v1/org/portal-auth
     *
     * Chooses the portal sign-in adapter and its settings. `custom`: `issuer`, `jwksUrl` (https), optional `loginUrl` (your page that mints the token) and `autoEnrollProgramId`. `oidc`: `issuer`, `clientId`, `clientSecret`. `referalli` removes any configuration. Owner only.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`.
     * @param PutOrgPortalAuthBodyOption1|PutOrgPortalAuthBodyOption2|PutOrgPortalAuthBodyOption3 $body
     * @return PutOrgPortalAuthResponse
     */
    public function putOrgPortalAuth(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/portal-auth', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set referral query parameters. PUT /v1/org/referral-params
     *
     * Replaces the extra query parameters aff.js reads a referral code from (up to 10; lowercase letters, digits and `_`). Built-in names are dropped. Imports add the previous tool's parameter here so already-shared links keep crediting. Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutOrgReferralParamsBody $body
     * @return GetOrgReferralParamsResponse
     */
    public function putOrgReferralParams(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/referral-params', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the data retention policy. PUT /v1/org/retention
     *
     * Changes retention days for one or more kinds of raw data (others keep their value). Values below a kind's minimum are rejected. Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutOrgRetentionBody $body
     * @return Retention
     */
    public function putOrgRetention(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/retention', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Connect your own identity provider. PUT /v1/org/sso/direct
     *
     * Team SSO with the org's own IdP, no broker: `adapter` `oidc` (issuer, client id and secret, the claim that holds roles) or `workos` (client id, organization id, the org's own API key). `roleMapping` maps IdP groups or roles to `admin`, `finance`, `analyst` or `support` (never owner); `defaultRole` covers everyone else, or null to keep them out; `domains` are the email domains "require SSO" applies to. The secret is encrypted and never returned; leave it out to keep the stored one. 409 while the org uses the Atlas broker. Owner only.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`.
     * @param PutOrgSsoDirectBodyOption1|PutOrgSsoDirectBodyOption2 $body
     * @return PutOrgSsoDirectResponse
     */
    public function putOrgSsoDirect(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/sso/direct', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Connect a 1099 filing provider. PUT /v1/org/tax-filing
     *
     * Chooses who e-files 1099-NEC forms: `test` (simulated) or `tax1099` with your own API key (stored encrypted). Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutOrgTaxFilingBody $body
     * @return PutOrgTaxFilingResponse
     */
    public function putOrgTaxFiling(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/tax-filing', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update the tax profile. PUT /v1/org/tax-profile
     *
     * Sets any of the tax profile fields; `null` clears one. A VAT id must be a valid EU VAT number; an EIN looks like `12-3456789`. Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PutOrgTaxProfileBody $body
     * @return TaxProfile
     */
    public function putOrgTaxProfile(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/tax-profile', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the tracker's consent default. PUT /v1/org/tracking-consent
     *
     * Sets the consent default served inside `/t/{token}/aff.js` (cached up to 5 minutes). Owner or admin. Audited.
     *
     * **Auth:** an API key with `org:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutOrgTrackingConsentBody $body
     * @return GetOrgTrackingConsentResponse
     */
    public function putOrgTrackingConsent(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/org/tracking-consent', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set my email language (partner). PUT /v1/partner/locale
     *
     * The partner account's preferred locale for emails.
     *
     * **Auth:** a partner session.
     * @param PutPartnerLocaleBody $body
     * @return PutPartnerLocaleResponse
     */
    public function putPartnerLocale(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/partner/locale', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set my payout details. PUT /v1/partner/orgs/{orgId}/payout-profile
     *
     * How this merchant pays the partner: the method, its details (checked for what the rail needs, such as a PayPal email or wallet address) and currency. When two-factor sign-in is on, send the current code in `x-totp-code` (`401 step_up_required` otherwise).
     *
     * **Auth:** a partner session.
     * @param PutPartnerOrgsOrgIdPayoutProfileBody $body
     * @return PutPartnerOrgsOrgIdPayoutProfileResponse
     */
    public function putPartnerOrgsOrgIdPayoutProfile(string $orgId, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/partner/orgs/' . self::seg($orgId) . '/payout-profile', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set my conversion postback. PUT /v1/partner/orgs/{orgId}/postback
     *
     * Registers a server-to-server postback URL the merchant calls on the partner's events, with macros `{topic}`, `{partner_id}`, `{referral_id}`, `{customer}`, `{amount}`, `{currency}`. Returns a new signing secret.
     *
     * **Auth:** a partner session.
     * @param PutPartnerOrgsOrgIdPostbackBody $body
     * @return PutPartnerOrgsOrgIdPostbackResponse
     */
    public function putPartnerOrgsOrgIdPostback(string $orgId, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/partner/orgs/' . self::seg($orgId) . '/postback', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set my VAT number. PUT /v1/partner/orgs/{orgId}/vat
     *
     * Sets the partner's own EU VAT number with this merchant, checked against VIES when the merchant requires it.
     *
     * **Auth:** a partner session.
     * @param PutPartnerOrgsOrgIdVatBody $body
     * @return PutPartnersIdVatResponse
     */
    public function putPartnerOrgsOrgIdVat(string $orgId, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/partner/orgs/' . self::seg($orgId) . '/vat', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update my creator profile. PUT /v1/partner/profile
     *
     * Updates the creator profile merchants search. `published: true` lists it in creator search; `acceptsInvites` controls whether merchants can invite the partner.
     *
     * **Auth:** a partner session.
     * @param PutPartnerProfileBody $body
     * @return Ok
     */
    public function putPartnerProfile(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/partner/profile', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set a partner's payout profile. PUT /v1/partners/{id}/payout-profile
     *
     * How the partner is paid: `method` (`paypal`, `wise`, `stripe_connect`, `ach`, `crypto`, `payoneer`, `tremendous` or `csv`), method `details` (a free-form map such as `{ "paypalEmail": … }`), the currency to pay in and the minimum balance before a payout. Partners can also set this themselves in the portal.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PutPartnersIdPayoutProfileBody $body
     * @return PutPartnersIdPayoutProfileResponse
     */
    public function putPartnersIdPayoutProfile(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/partners/' . self::seg($id) . '/payout-profile', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set a partner's VAT number. PUT /v1/partners/{id}/vat
     *
     * Sets (or clears with `null`) the partner's EU VAT number on their payout profile. With `viesCheck` on, VIES must list it as registered. 404 until the partner has payout details. Audited.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PutPartnersIdVatBody $body
     * @return PutPartnersIdVatResponse
     */
    public function putPartnersIdVat(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/partners/' . self::seg($id) . '/vat', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Connect a payout provider. PUT /v1/payout-connections/{provider}
     *
     * Connects (or replaces) your own account with a payout provider, so payouts move money from your account: `paypal` (`clientId`, `secret`), `stripe` (`secretKey`), `circle` (`apiKey`, `walletId`), `wise` (`apiToken`, `profileId`), `payoneer` (`clientId`, `secret`, `programId`) or `tremendous` (`apiKey`, `fundingSourceId`), each with `env`. Stored encrypted and never echoed. Live mode only (`409 test_mode_unsupported` in test mode). Audited.
     *
     * **Auth:** an API key with `payouts:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PutPayoutConnectionsProviderBodyOption1|PutPayoutConnectionsProviderBodyOption2|PutPayoutConnectionsProviderBodyOption3|PutPayoutConnectionsProviderBodyOption4|PutPayoutConnectionsProviderBodyOption5|PutPayoutConnectionsProviderBodyOption6 $body
     * @return PutPayoutConnectionsProviderResponse
     */
    public function putPayoutConnectionsProvider(string $provider, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/payout-connections/' . self::seg($provider) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set a product margin. PUT /v1/profitability/products/{productRef}
     *
     * Sets a product's margin (`marginBps`) or unit cost (`unitCostMinor`, in `currency`, default the reporting currency); exactly one of the two. Audited.
     *
     * **Auth:** an API key with `analytics:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutProfitabilityProductsProductRefBody $body
     * @return GetProfitabilityProductsProductRefResponse
     */
    public function putProfitabilityProductsProductRef(string $productRef, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/profitability/products/' . self::seg($productRef) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Update profitability settings. PUT /v1/profitability/settings
     *
     * Changes the org's economics settings, or with `programId` that program's overrides (a program can't override org-only fields such as the reporting currency). Returns the resolved settings. Re-run `POST /v1/profitability/rebuild` to apply changes to past figures. Audited.
     *
     * **Auth:** an API key with `analytics:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutProfitabilitySettingsBody $body
     * @return GetProfitabilitySettingsResponse
     */
    public function putProfitabilitySettings(array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/profitability/settings', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Configure autopricing. PUT /v1/programs/{id}/autopricing
     *
     * Self-pricing commissions: a target (`targetRoas`, or with `objective: "roi"` a `targetRoi`) and the `minBps`/`maxBps` band partner rates may move within. `enabled: false` turns it off.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutProgramsIdAutopricingBody $body
     * @return PutProgramsIdAutopricingResponse
     */
    public function putProgramsIdAutopricing(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/programs/' . self::seg($id) . '/autopricing', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the incrementality holdout. PUT /v1/programs/{id}/incrementality
     *
     * Holds out a random control share of referrals (`holdoutBps`, up to 5000 = 50%) from being commissioned, so comparing control and treatment conversion measures the true lift partners cause. 0 turns it off.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutProgramsIdIncrementalityBody $body
     * @return PutProgramsIdIncrementalityResponse
     */
    public function putProgramsIdIncrementality(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/programs/' . self::seg($id) . '/incrementality', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the agent negotiation policy. PUT /v1/programs/{id}/negotiation-policy
     *
     * What an agent may negotiate to in this program: rates between `minBps` and `maxBps`, accepted automatically up to `autoAcceptMaxBps`. Requires `minBps <= autoAcceptMaxBps <= maxBps`. `enabled: false` closes the program to negotiation.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutProgramsIdNegotiationPolicyBody $body
     * @return PutProgramsIdNegotiationPolicyResponse
     */
    public function putProgramsIdNegotiationPolicy(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/programs/' . self::seg($id) . '/negotiation-policy', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set a partner's group. PUT /v1/programs/{id}/partners/{partnerId}/group
     *
     * Puts an enrolled partner in one of the program's groups, or none (`groupId: null`). A partner is in at most one group per program.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutProgramsIdPartnersPartnerIdGroupBody $body
     * @return PutProgramsIdPartnersPartnerIdGroupResponse
     */
    public function putProgramsIdPartnersPartnerIdGroup(string $id, string $partnerId, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/programs/' . self::seg($id) . '/partners/' . self::seg($partnerId) . '/group', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set a program's payout schedule. PUT /v1/programs/{id}/payout-schedule
     *
     * Overrides the org payout schedule for this program: a schedule, `{ "kind": "off" }` to never pay it automatically, or `null` to follow the org schedule again. Returns the next run date. Audited.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`, `finance`.
     * @param PutProgramsIdPayoutScheduleBody $body
     * @return PutProgramsIdPayoutScheduleResponse
     */
    public function putProgramsIdPayoutSchedule(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/programs/' . self::seg($id) . '/payout-schedule', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Set the referee reward. PUT /v1/programs/{id}/referee-reward
     *
     * What a referred customer gets: `store_credit`, a `coupon` or a `gift_card`, either a flat `amountMinor` or a percent (`bps`, optionally capped with `capMinor`) of their first payment, issued on their first commission or first payment. A percent reward needs `on: "first_payment"`. `enabled: false` removes it. Each reward issued publishes `referee_reward.earned`.
     *
     * **Auth:** an API key with `programs:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutProgramsIdRefereeRewardBody $body
     * @return PutProgramsIdRefereeRewardResponse
     */
    public function putProgramsIdRefereeReward(string $id, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/programs/' . self::seg($id) . '/referee-reward', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Save a reward rule. PUT /v1/rewards/rules/{key}
     *
     * Creates or replaces a rule: the amount, the reason, an optional program and an optional `event` it rewards (one rule per event).
     *
     * **Auth:** an API key with `commissions:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutRewardsRulesKeyBody $body
     * @return PutRewardsRulesKeyResponse
     */
    public function putRewardsRulesKey(string $key, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/rewards/rules/' . self::seg($key) . '', [], $body, $idempotencyKey, 'json');
    }

    /**
     * Connect a support tool. PUT /v1/support/apps/{adapter}
     *
     * Enable a support tool and store its signing secret (vendor-issued; write-only) or, for Zendesk, the app public key in `config.publicKeyPem`. For `custom` Referalli mints the secret: it is returned once, and `rotate: true` mints a new one.
     *
     * **Auth:** an API key with `partners:write` (or `full`), or a session with role `owner`, `admin`.
     * @param PutSupportAppsAdapterBody $body
     * @return PutSupportAppsAdapterResponse
     */
    public function putSupportAppsAdapter(string $adapter, array $body, ?string $idempotencyKey = null): mixed
    {
        return $this->request('PUT', '/v1/support/apps/' . self::seg($adapter) . '', [], $body, $idempotencyKey, 'json');
    }

}
